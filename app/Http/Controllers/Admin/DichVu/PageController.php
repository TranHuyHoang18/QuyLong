<?php

namespace App\Http\Controllers\Admin\DichVu;

use App\Http\Controllers\Controller;
use App\Models\DichVuPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    public function index()
    {
        $data['map'] = array();
        $tk = DB::table('dichvucates')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }

        $data['pages'] = DB::table('dichvupages')
            ->orderBy('created_at','DESC')
            ->orderBy('category','ASC')
            ->paginate(12);
        return view('backend.content.dichvu.page.index',$data);
    }
    public function add()
    {
        $data['categories'] =DB::table('dichvucates')
            ->get();
        return view('backend.content.dichvu.page.add',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $item = new DichVuPageModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->tag = $this->slugify($input['name']);
        $item->category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->image = isset($input['images']) ? $input['images'] : '';
        $item->status =0;
        $item->views =0;
        $item->comments =0;
        $item->save();
        return redirect()->route('admin.dichvu.page.index');
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
        $item = DichVuPageModel::find($id);
        $item->delete();
        return redirect()->route('admin.dichvu.page.index');
    }
}
