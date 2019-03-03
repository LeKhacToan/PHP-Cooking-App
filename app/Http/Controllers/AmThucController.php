<?php

namespace App\Http\Controllers;
use App\AmThuc;
use Illuminate\Http\Request;

class AmThucController extends Controller
{
    //
    public function getDanhSach(){
        $amthuc = AmThuc::all();
       return view('admin/am_thuc/danhsach',['amthuc'=>$amthuc]);
    }
    public function getThem(){
       return view('admin/am_thuc/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:1|max:255|unique:amthuc,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 1 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $amthuc= new AmThuc;
        $amthuc->name=$request->name;
        $amthuc->save();

        return redirect('admin/amthuc/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $amthuc= AmThuc::find($id);
       return view('admin/am_thuc/sua',['amthuc'=>$amthuc]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|min:1|max:255|unique:amthuc,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 1 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $amthuc= AmThuc::find($id);
        $amthuc->name=$request->name;
        $amthuc->save();
        return redirect('admin/amthuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $amthuc=AmThuc::find($id);
       $amthuc->delete();
       return redirect('admin/amthuc/danhsach')->with('thongbao','Xóa thành công');
    }
}
