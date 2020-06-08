<?php

namespace App\Http\Controllers\Admin\TuyenDung;

use App\Http\Controllers\Controller;
use App\Models\TuyenDungPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['map'] = array();
        $tk = DB::table('tuyendung_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['pages'] = DB::table('tuyendung_pages')
            ->orderBy('created_at','DESC')
            ->orderBy('id_category','ASC')
            ->paginate(12);
        return view('backend.content.tuyendung.page.index',$data);
    }
    public function add()
    {
        $data['categories'] =DB::table('tuyendung_categories')
            ->paginate(20);
        return view('backend.content.tuyendung.page.add',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $item = new TuyenDungPageModel();
        $item->name = $input['name'];
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->date = $input['date'];
        $item->status =0;
        $item->views =0;
        $item->comments =0;
        $item->save();
        return redirect()->route('admin.tuyendung.page.index');
    }
    public function detail($id)
    {
        $data['map'] = array();
        $tk = DB::table('tuyendung_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['page'] = TuyenDungPageModel::find($id);
        return view('backend.content.tuyendung.page.detail',$data);
    }
    public function edit($id)
    {
        $data['page'] = TuyenDungPageModel::find($id);
        $data['categories'] = DB::table('tuyendung_categories')->paginate(20);

        return view('backend.content.tuyendung.page.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();

        $item = TuyenDungPageModel::find($id);
        $item->name = $input['name'];
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->date = $input['date'];
        $item->save();
        return redirect()->route('admin.tuyendung.page.index');
    }
    public function destroy($id)
    {
        $item = TuyenDungPageModel::find($id);
        $item->delete();
        return redirect()->route('admin.tuyendung.page.index');
    }
}
