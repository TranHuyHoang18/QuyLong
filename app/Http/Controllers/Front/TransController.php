<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\TransSPModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new TransSPModel();
        $item->name= $input['name'];
        $item->phone= $input['phone'];
        $item->email= $input['email'];
        $item->name_product= $input['name_product'];
        $item->weight= $input['weight'];
        $item->address_s= $input['address_s'];
        $item->address_r= $input['address_r'];
        $item->tmp= isset($input['content']) ? $input['content'] : '';
        $item->status= 0;
        $item->save();

        return redirect()->route('home');
    }
}
