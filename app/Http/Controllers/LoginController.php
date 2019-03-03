<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|min:3|max:255',
            'password'=>'required',
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'email.min' => 'Tên ít nhất là 3 kí tự',
            'email.max' => 'Tên nhiều nhất 255 kí tự',
            'password.required'=>'Bạn chưa nhập mật khẩu',
        ]);
        $login=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($login)){
            $user = Auth::user();
            if($user->roll==1)
            {
                return $request('admin/user/them');
            }
            else{
                return redirect('/')->with('thongbao','Danh nhap thanh cong');
            }
        }
        else{
            return redirect('/')->with('loi','Dang nhap that bai');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
