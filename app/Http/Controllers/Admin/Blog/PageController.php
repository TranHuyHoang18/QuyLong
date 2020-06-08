<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
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
    }
    public function index()
    {
        $data['map'] = array();
        $tk = DB::table('blog_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['pages'] = DB::table('blog_pages')
            ->orderBy('created_at','DESC')
            ->orderBy('id_category','ASC')
            ->paginate(12);
        return view('backend.content.blog.page.index',$data);
    }
    public function add()
    {
        $data['categories'] = $this->cate;
        return view('backend.content.blog.page.add',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $item = new BlogPageModel();
        $item->name = $input['name'];
        $item->image = isset($input['images']) ? json_encode($input['images']) : '';
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->views =0;
        $item->comments =0;
        $item->status =0;
        $item->save();
        return redirect()->route('admin.blog.page.index');
    }
    public function detail($id)
    {
        $data['map'] = array();
        $tk = DB::table('blog_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['page'] = BlogPageModel::find($id);
        return view('backend.content.blog.page.detail',$data);
    }
    public function edit($id)
    {
        $data['page'] = BlogPageModel::find($id);
        $data['categories'] = $this->cate;
        return view('backend.content.blog.page.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();

        $item = BlogPageModel::find($id);
        $item->name = $input['name'];
        $item->image = isset($input['images']) ? json_encode($input['images']) : '';
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->save();
        return redirect()->route('admin.blog.page.index');
    }
    public function destroy($id)
    {
        $item = BlogPageModel::find($id);
        $item->delete();
        return redirect()->route('admin.blog.page.index');
    }
}
