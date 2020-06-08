<?php

namespace App\Http\Controllers\Admin\TuyenDung;

use App\Http\Controllers\Controller;
use App\Models\tuyendungCAteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['categories'] =DB::table('tuyendung_categories')
            ->paginate(15);
        return view('backend.content.tuyendung.category.index',$data);
    }
    public function add()
    {
        return view('backend.content.tuyendung.category.add');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new tuyendungCAteModel();
        $item->name = $input['name'];
        $item->save();
        return redirect()->route('admin.tuyendung.category.index');
    }

    public function edit($id)
    {
        $data['item'] = tuyendungCAteModel::find($id);
        return view('backend.content.tuyendung.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = tuyendungCAteModel::find($id);
        $item->name = $input['name'];
        $item->save();
        return redirect()->route('admin.tuyendung.category.index');
    }
    public function destroy($id)
    {
        $item = tuyendungCAteModel::find($id);
        $item->delete();
        return redirect()->route('admin.tuyendung.category.index');

    }
}
