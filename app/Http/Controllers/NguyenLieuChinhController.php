<?php

namespace App\Http\Controllers;
use App\NguyenLieuChinh;
use Illuminate\Http\Request;

class NguyenLieuChinhController extends Controller
{
    //
    public function getDanhSach(){
        $nguyenlieuchinh = NguyenLieuChinh::all();
       return view('admin/nguyen_lieu_chinh/danhsach',['nguyenlieuchinh'=>$nguyenlieuchinh]);
    }
    public function getThem(){
       return view('admin/nguyen_lieu_chinh/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:255|unique:nguyenlieuchinh,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 2 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $nguyenlieuchinh= new NguyenLieuChinh;
        $nguyenlieuchinh->name=$request->name;
        $nguyenlieuchinh->save();

        return redirect('admin/nguyenlieuchinh/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $nguyenlieuchinh= NguyenLieuChinh::find($id);
       return view('admin/nguyen_lieu_chinh/sua',['nguyenlieuchinh'=>$nguyenlieuchinh]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:amthuc,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 3 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $nguyenlieuchinh= NguyenLieuChinh::find($id);
        $nguyenlieuchinh->name=$request->name;
        $nguyenlieuchinh->save();
        return redirect('admin/nguyenlieuchinh/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $amthuc=NguyenLieuChinh::find($id);
       $amthuc->delete();
       return redirect('admin/nguyenlieuchinh/danhsach')->with('thongbao','Xóa thành công');
    }
}
