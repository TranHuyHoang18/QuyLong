<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaCuocController extends Controller
{
    public $data= array();
    public $cate=array();
    public $n_cate=0;
    public $dd= array();
    public $t= array();
    public function dequy($k,$tk)
    {
        $this->n_cate++;
        $this->cate[$this->n_cate] = array();
        $this->cate[$this->n_cate]['id'] = $this->t[$k]->id;
        $this->cate[$this->n_cate]['name'] = $this->t[$k]->name;
        $this->cate[$this->n_cate]['level'] = $tk;
        $this->dd[$k] = true;
        for($i=0;$i< count($this->t);$i++)
        {
            if($this->t[$i]->id_parent == $this->t[$k]->id && $this->dd[$i] == false)
            {
                $this->dequy($i,$tk+1);
            }
        }
    }
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
        $this->t = DB::table('giacuoc_cates')
            ->get();
        // khoi tao mang danh dau de quy
        for($i=0;$i<=count($this->t);$i++)
            $this->dd[$i] = false;
        // de quy
        for ($i=0;$i<count($this->t);$i++)
        {
            if($this->dd[$i]==false)
            {
                $this->dequy($i,0);
            }
        }
    }
    public function index()
    {
        $this->data['categories']=$this->cate;
        $this->data['pages'] = array();
        foreach ($this->data['categories'] as $category)
        {
            $id = $category['id'];
            $this->data['pages'][$id] =  DB::table('giacuoc_pages')
                ->where('category','=',$id)
                ->orderBy('created_at','DESC')
                ->get();
        }
        return view('frontend.content.giacuoc.index',$this->data);
    }
    public function category($slug_cate)
    {
        $item = DB::table('giacuoc_cates')
            ->where('slug','=',$slug_cate)->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $cates = DB::table('giacuoc_cates')->get();
        $this->data['pages']= array();
        $this->data['catess']= array();
        $i=0;
        foreach ($cates as $cate)
            if($cate->id_parent == $item->id)
        {
            $i++;
            $this->data['catess'][$i] = $cate;
            $this->data['pages'][$cate->id] =  DB::table('giacuoc_pages')
                ->where('category','=',$cate->id)
                ->orderBy('created_at','DESC')
                ->get();
        }
        return view('frontend.content.giacuoc.category',$this->data);
    }
    public function detail($slug_cate,$slug_page)
    {

        $item = DB::table('giacuoc_cates')
            ->where('slug','=',$slug_cate)->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $item = DB::table('giacuoc_pages')
            ->where('category','=',$item->id)
            ->where('slug','=',$slug_page)
            ->get();
        $this->data['page']= $item[0];
        return view('frontend.content.giacuoc.detail',$this->data);
    }
}
