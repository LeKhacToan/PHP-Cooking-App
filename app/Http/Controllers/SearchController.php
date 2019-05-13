<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\PhuongPhap;
use App\AmThuc;
use App\LoaiMon;
use App\DoKho;
use App\NguyenLieuChinh;
use App\ThucDon;
use App\BaiViet;
class SearchController extends Controller
{
    //
    public function postSearch(Request $request){
        $name=$request->tenmonan;
        $monan=BaiViet::all();
        if($name!=""){
            //tim mon an
            $monan=BaiViet::where('name','like',"%{$name}%")->get();
        }
        $dokho = DoKho::all();
        $loaimon = LoaiMon::all();
        $thucdon = ThucDon::all();
        $phuongphap = PhuongPhap::all();
        $nguyenlieuchinh = NguyenLieuChinh::all();
        $amthuc = AmThuc::all();
        return view('pages/search',['monan'=>$monan,'dokho' => $dokho, 'loaimon' => $loaimon, 'thucdon' => $thucdon, 'nguyenlieuchinh' => $nguyenlieuchinh, 'phuongphap' => $phuongphap, 'amthuc' => $amthuc]);
    }
    public function postadSearch(Request $request){
        $mangInput=array('amthuc','nguyenlieuchinh','phuongphap','loaimon','dokho','thucdon');
         $monan=BaiViet::all();
         for($i=0;$i<6;$i++){
              $input=$request->input($mangInput[$i]);
               if(isset($input)){
                  $value=Input::get($mangInput[$i]);
                      $monan=$monan->whereIn($mangInput[$i].'_id',$value);
               }
         }
        $data=view("pages/monan",compact('monan'))->render();
         return response()->json(['html'=>$data]);
    }
}
