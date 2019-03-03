<?php

namespace App\Http\Controllers;
use App\PhuongPhap;
use Illuminate\Http\Request;

class PhuongPhapController extends Controller
{
    //
    public function getDanhSach(){
        $phuongphap = PhuongPhap::all();
       return view('admin/phuong_phap/danhsach',['phuongphap'=>$phuongphap]);
    }
    public function getThem(){
       return view('admin/phuong_phap/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:1|max:255|unique:phuongphap,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 1 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $phuongphap= new PhuongPhap;
        $phuongphap->name=$request->name;
        $phuongphap->save();

        return redirect('admin/phuongphap/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $phuongphap= PhuongPhap::find($id);
       return view('admin/phuong_phap/sua',['phuongphap'=>$phuongphap]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|min:1|max:255|unique:phuongphap,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 1 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $phuongphap= PhuongPhap::find($id);
        $phuongphap->name=$request->name;
        $phuongphap->save();
        return redirect('admin/phuongphap/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $phuongphap=PhuongPhap::find($id);
       $phuongphap->delete();
       return redirect('admin/phuongphap/danhsach')->with('thongbao','Xóa thành công');
    }
}
