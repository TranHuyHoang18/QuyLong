<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewsLetterModel;
use App\models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
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
        $item = new NewsLetterModel();
        $item->email = $input['email'];
        $item->save();
        return redirect()->route('home');
    }
}
