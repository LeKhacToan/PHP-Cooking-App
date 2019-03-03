<?php

namespace App\Http\Controllers;
use App\DoKho;
use Illuminate\Http\Request;

class DoKhoController extends Controller
{
    //
    public function getDanhSach(){
        $dokho = DoKho::all();
       return view('admin/do_kho/danhsach',['dokho'=>$dokho]);
    }
    public function getThem(){
       return view('admin/do_kho/them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:255|unique:amthuc,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 2 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $dokho= new DoKho;
        $dokho->name=$request->name;
        $dokho->save();

        return redirect('admin/dokho/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $dokho=DoKho::find($id);
       return view('admin/do_kho/sua',['dokho'=>$dokho]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'name' => 'required|min:2|max:255|unique:dokho,name',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.min' => 'Tên ít nhất là 2 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
        ]);
        $dokho= DoKho::find($id);
        $dokho->name=$request->name;
        $dokho->save();
        return redirect('admin/dokho/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id){
       $dokho=DoKho::find($id);
       $dokho->delete();
       return redirect('admin/dokho/danhsach')->with('thongbao','Xóa thành công');
    }
}
