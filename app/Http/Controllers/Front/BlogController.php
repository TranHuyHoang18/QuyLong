<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function index()
    {
        return view('frontend.content.blog.index',$this->data);
    }
    public function camnang()
    {
        return view('frontend.content.blog.camnangvanchuyen.index',$this->data);
    }
    public function HDguihang()
    {
        return view('frontend.content.blog.camnangvanchuyen.huongdanguihang.index',$this->data);
    }
    public function a_z()
    {
        return view('frontend.content.blog.camnangvanchuyen.huongdanguihang.a_z.index',$this->data);
    }
    public function index1($id)
    {
        echo " a";
    }
    public function index2($id,$ik)
    {
        echo " b";
    }
}
