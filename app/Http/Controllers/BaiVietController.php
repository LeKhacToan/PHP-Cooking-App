<?php

namespace App\Http\Controllers;
use App\PhuongPhap;
use App\AmThuc;
use App\LoaiMon;
use App\DoKho;
use App\NguyenLieuChinh;
use App\ThucDon;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    //
    public function getDanhSach(){

    }
    public function getThem(){
      /*
        $amthuc=AmThuc::all;


        $nguyenlieuchinh=NguyenLieuChinh::all();
        $phuongphap=PhuongPhap::all();*/
        $dokho=DoKho::all();
        $loaimon=LoaiMon::all();
        $thucdon=ThucDon::all();
        $phuongphap=PhuongPhap::all();
        $nguyenlieuchinh=NguyenLieuChinh::all();
        $amthuc=AmThuc::all();

         return view('admin/bai_viet/them',['dokho'=>$dokho,'loaimon'=>$loaimon,'thucdon'=>$thucdon,'nguyenlieuchinh'=>$nguyenlieuchinh,'phuongphap'=>$phuongphap,'amthuc'=>$amthuc]);
    }
    public function postThem(){

    }
    public function getSua(){

    }
    public function postSua(){

    }
    public function xoa(){

    }
}
