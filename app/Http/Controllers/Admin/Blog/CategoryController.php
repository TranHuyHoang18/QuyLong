<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public $cate = array();
    public $n_cate=0;
    public $dd= array();
    public $t= array();
    public function dequy($k)
    {
        $this->n_cate++;
        $this->cate[$this->n_cate] = array();
        $this->cate[$this->n_cate]['id'] = $this->t[$k]->id;
        $this->cate[$this->n_cate]['name'] = $this->t[$k]->name;
        $this->cate[$this->n_cate]['level'] = $this->t[$k]->level;
        $this->dd[$k] = true;
        for($i=0;$i< count($this->t);$i++)
        {
            if($this->t[$i]->id_parent == $this->t[$k]->id && $this->dd[$i] == false)
            {
                $this->dequy($i);
            }
        }
    }
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->t = DB::table('blog_categories')
            ->get();
        // khoi tao mang danh dau de quy
        for($i=0;$i<=count($this->t);$i++)
            $this->dd[$i] = false;
         // de quy
        for ($i=0;$i<count($this->t);$i++)
        {
            if($this->dd[$i]==false)
            {
                $this->dequy($i);
            }
        }
        /*echo "<pre>";
        print_r($this->cate);
        echo "</pre>";
        exit();*/
    }
    public function index()
    {
        $data['categories'] =$this->cate;
        return view('backend.content.blog.category.index',$data);
    }
    public function add()
    {
        $data['categories'] = $this->cate;
        return view('backend.content.blog.category.add',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new BlogCategoryModel();
        $item->name = $input['name'];
        $item->id_parent = $input['id_parent'];
        if($input['id_parent']>0)
        {
            $parent = BlogCategoryModel::find($input['id_parent']);
            $item->level = $parent->level + 1;
        }
        else
        {
            $item->level = 1;
        }
        $item->save();
        return redirect()->route('admin.blog.category.index');
    }

    public function edit($id)
    {
        $data['item'] = BlogCategoryModel::find($id);
        $data['categories'] = $this->cate;
        return view('backend.content.blog.category.edit',$data);
    }
    public function updateLevel($id,$level)
    {
        $tmp = DB::table('blog_categories')->get();
        foreach ($tmp as $tp)
        {
            if($tp->id_parent == $id)
            {
                $tk = BlogCategoryModel::find($tp->id);
                $tk->level = $level+1;
                $tk->save();
                $this->updateLevel($tk->id,$tk->level);
            }
        }
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = BlogCategoryModel::find($id);
        $item->name = $input['name'];
        $item->id_parent = $input['id_parent'];
        if($input['id_parent']>0)
        {
            $parent = BlogCategoryModel::find($input['id_parent']);
            $item->level = $parent->level + 1;

        }
        else
        {
            $item->level = 1;
        }
        $this->updateLevel($id,$item->level);
        $item->save();
        return redirect()->route('admin.blog.category.index');
    }
    public function destroy($id)
    {
        $item = BlogCategoryModel::find($id);
        $item->delete();
        return redirect()->route('admin.blog.category.index');

    }
}
