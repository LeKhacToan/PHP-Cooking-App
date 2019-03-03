<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getDanhSach()
    {

        return view('admin.user.danhsach');
    }
    //Them nguoi dung
    public function getThem()
    {
        return view('admin.user.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:32',
            'password_confirmation' => 'required|same:password',
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng email',
            'email.unique' => 'Email đã tồn tại',

            'username.required' => 'Bạn chưa điền username',
            'username.min' => 'User name ít nhất là 3 kí tự',
            'username.max' => 'User name nhiều nhất 255 kí tự',

            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'password.max' => 'Mật khẩu nhiều nhất 32 kí tự',

            'password_confirmation.required' => 'Bạn chưa xác nhận lại password',
            'password_confirmation.same' => 'Mật khẩu nhập lại chưa đúng',
        ]);
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
    public function getSua(){

    }
    public function postSua(){

    }
    public function xoa(){

    }
}
