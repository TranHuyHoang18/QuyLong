<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TraCuuController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function index()
    {
        return view('frontend.content.tracuu.index',$this->data);
    }
    public function giacuoc()
    {
        return view('frontend.content.tracuu.index',$this->data);
    }
    public function vandon()
    {
        return view('frontend.content.tracuu.vandon',$this->data);
    }
    public function diemguihang()
    {
        return view('frontend.content.tracuu.diemguihang',$this->data);
    }
}
