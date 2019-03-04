<?php

namespace App\Http\Controllers;
use App\AmThuc;
use Illuminate\Http\Request;
use App\Http\Requests\ShareRequest;

class AmThucController extends Controller
{
    public function getDanhSach(){
        $amthuc = AmThuc::all();
       return view('admin/am_thuc/danhsach',['amthuc'=>$amthuc]);
    }
    public function getThem(){
       return view('admin/am_thuc/them');
    }
    public function postThem(ShareRequest $request){
        $amthuc= new AmThuc;
        $amthuc->name=$request->name;
        $amthuc->save();
        return redirect('admin/amthuc/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
       $amthuc= AmThuc::find($id);
       return view('admin/am_thuc/sua',['amthuc'=>$amthuc]);
    }
    public function postSua(ShareRequest $request,$id){
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
