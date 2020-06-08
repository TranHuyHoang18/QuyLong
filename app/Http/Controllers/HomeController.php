<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }

    public function index()
    {
        $this->data['news'] = DB::table('news')
        ->orderBy('updated_at','DESC')
        ->paginate(3);

        return view('frontend.homepage.index',$this->data);
    }
}
