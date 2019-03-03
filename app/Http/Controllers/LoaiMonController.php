<?php

namespace App\Http\Controllers;
use App\LoaiMon;
use Illuminate\Http\Request;

class LoaiMonController extends Controller
{
    //
    public function getDanhSach(){
        $loaimon = LoaiMon::all();
       return view('admin/loai_mon/danhsach',['loaimon'=>$loaimon]);
    }
    public function getThem(){
       return view('admin/loai_mon/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:loaimon,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 3 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $loaimon= new LoaiMon;
        $loaimon->name=$request->name;
        $loaimon->save();

        return redirect('admin/loaimon/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $loaimon= LoaiMon::find($id);
       return view('admin/loai_mon/sua',['loaimon'=>$loaimon]);
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
        $loaimon = LoaiMon::find($id);
        $loaimon->name=$request->name;
        $loaimon->save();
        return redirect('admin/loaimon/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $loaimon = LoaiMon::find($id);
       $loaimon->delete();
       return redirect('admin/loaimon/danhsach')->with('thongbao','Xóa thành công');
    }
}
