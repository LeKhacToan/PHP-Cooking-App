<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThucDon;
class ThucDonController extends Controller
{
    //
    public function getDanhSach(){
        $thucdon = ThucDon::all();
       return view('admin/thuc_don/danhsach',['thucdon'=>$thucdon]);
    }
    public function getThem(){
       return view('admin/thuc_don/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:thucdon,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 3 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $thucdon= new ThucDon;
        $thucdon->name=$request->name;
        $thucdon->save();

        return redirect('admin/thucdon/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $thucdon= ThucDon::find($id);
       return view('admin/thuc_don/sua',['thucdon'=>$thucdon]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:thucdon,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 3 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $thucdon= ThucDon::find($id);
        $thucdon->name=$request->name;
        $thucdon->save();
        return redirect('admin/thucdon/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $thucdon=ThucDon::find($id);
       $thucdon->delete();
       return redirect('admin/thucdon/danhsach')->with('thongbao','Xóa thành công');
    }
}
