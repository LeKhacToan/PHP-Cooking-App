<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\PhuongPhap;
use App\AmThuc;
use App\LoaiMon;
use App\DoKho;
use App\NguyenLieuChinh;
use App\ThucDon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\BaiViet;
use App\BaiVietTag;
use App\NguyenLieu;
use App\BuocThucHien;
use App\Tag;
class UserController extends Controller
{
    public function getDanhSach()
    {
       $user=User::all();
        return view('admin/user/danhsach',['user'=>$user]);
    }
    //Them nguoi dung
    public function getThem()
    {
        return view('admin/user/them');
    }
    public function postThem(UserRequest $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->username;
        $user->password = bcrypt($request->password);
        $user->role = $request->quyen;
        $user->sex = $request->gioi_tinh;
        if ($request->ngay_sinh != "") {
            $user->ngay_sinh = date("Y/m/d", strtotime($request->ngay_sinh));
        }
        $user->nick_name = $request->nick_name;
        $user->decription = $request->decription;
        if (isset($request->block)) {
            $user->block = true;
        }
        if (isset($request->block_cmt)) {
            $user->block_cmt = true;
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $duoi = $avatar->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/user/them')->with('loi', 'File  ảnh có định dạng jpg,png,jpeg');
            }
            $name = $avatar->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/avatar" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $avatar->move("upload/avatar", $hinh);
            $user->avatar = $hinh;
        } else {
            $user->avatar = "";
        }
        if ($request->hasFile('anh_bia')) {
            $avatar = $request->file('anh_bia');
            $duoi = $avatar->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/user/them')->with('loi', 'File ảnh có định dạng jpg,png,jpeg');
            }
            $name = $avatar->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/anhbia" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $avatar->move("upload/anhbia", $hinh);
            $user->anh_bia = $hinh;
        } else {
            $user->anh_bia = "";
        }
        $user->diem = 0;
        $user->link_facebook = $request->link_facebook;
        $user->link_instagram = $request->link_instagram;
        $user->link_twitter = $request->link_twitter;
        $user->save();

        return redirect('admin/user/them')->with('thongbao', 'Thêm thành công');
    }
    public function getSua($id){
      $user=User::find($id);
      return view('admin/user/sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request, [
            'username' => 'required|min:3|max:255',
        ], [
            'username.required' => 'Bạn chưa điền username',
            'username.min' => 'User name ít nhất là 3 kí tự',
            'username.max' => 'User name nhiều nhất 255 kí tự',
        ]);
        $user= User::find($id);
        $user->role = $request->quyen;
        $user->sex = $request->gioi_tinh;
        if ($request->ngay_sinh != "") {
            $user->ngay_sinh = date("Y/m/d", strtotime($request->ngay_sinh));
        }
        $user->nick_name = $request->nick_name;
        $user->decription = $request->decription;
        if (isset($request->block)) {
            $user->block = true;
        }
        else{
            $user->block = false;
        }
        if (isset($request->block_cmt)) {
            $user->block_cmt = true;
        }
        else{
            $user->block_cmt = false;
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $duoi = $avatar->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/user/them')->with('loi', 'File  ảnh có định dạng jpg,png,jpeg');
            }
            $name = $avatar->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/avatar" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            if($user->avatar!=""){
                unlink("upload/avatar/".$user->avatar);
            }
            $avatar->move("upload/avatar", $hinh);
            $user->avatar = $hinh;
        }
        if ($request->hasFile('anh_bia')) {
            $avatar = $request->file('anh_bia');
            $duoi = $avatar->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect('admin/user/them')->with('loi', 'File ảnh có định dạng jpg,png,jpeg');
            }
            $name = $avatar->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/anhbia" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            if($user->anh_bia!=""){
               unlink("upload/anhbia/".$user->anh_bia);
            }
            $avatar->move("upload/anhbia", $hinh);
            $user->anh_bia = $hinh;
        }
        $user->link_facebook = $request->link_facebook;
        $user->link_instagram = $request->link_instagram;
        $user->link_twitter = $request->link_twitter;
        $user->save();
      return redirect('admin/user/danhsach')->with('thongbao','Sua thanh cong');
    }
    public function xoa(){

    }
    public function getChiTiet($id){
        $user=User::find($id);
        $dokho=DoKho::all();
        $loaimon=LoaiMon::all();
        $thucdon=ThucDon::all();
        $phuongphap=PhuongPhap::all();
        $nguyenlieuchinh=NguyenLieuChinh::all();
        $amthuc=AmThuc::all();
        return view('pages/trangcanhan',['user'=>$user,'dokho'=>$dokho,'loaimon'=>$loaimon,'thucdon'=>$thucdon,'nguyenlieuchinh'=>$nguyenlieuchinh,'phuongphap'=>$phuongphap,'amthuc'=>$amthuc]);
    }
}
