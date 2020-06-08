<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DichVuController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function index()
    {
        $this->data['categories']=DB::table('dichvucates')->get();
        $this->data['pages'] = array();
        foreach ($this->data['categories'] as $category)
        {
            $id = $category->id;
            $this->data['pages'][$id] =  DB::table('dichvupages')
                ->where('category','=',$id)
                ->orderBy('created_at','DESC')
                ->get();
        }
        return view('frontend.content.dichvu.index',$this->data);
    }
    public function VCnhanh()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-nhanh')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function VCtietkiem()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-tiet-kiem')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function VCthucung()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-thu-cung')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function VCoto()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-o-to')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function VCxemay()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-xe-may')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function Chuyennha()
    {
        $item = DB::table('dichvucates')
            ->where('slug','=','van-chuyen-toan-quoc')->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $this->data['pages'] = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->orderBy('created_at','DESC')
            ->get();
        return view('frontend.content.dichvu.category',$this->data);
    }
    public function detail($slug_cate,$slug_page)
    {
        $item = DB::table('dichvucates')
            ->where('slug','=',$slug_cate)->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $item = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->where('slug','=',$slug_page)
            ->get();
        $this->data['page']= $item[0];
        return view('frontend.content.dichvu.detail',$this->data);
    }
}
