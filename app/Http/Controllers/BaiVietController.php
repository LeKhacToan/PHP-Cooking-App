<?php

namespace App\Http\Controllers;
use App\PhuongPhap;
use App\AmThuc;
use App\LoaiMon;
use App\DoKho;
use App\NguyenLieuChinh;
use App\ThucDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\BaiViet;
use App\BaiVietTag;
use App\NguyenLieu;
use App\BuocThucHien;
use App\Tag;
use App\Http\Requests\ShareBaiVietRequest;
use App\Http\Requests\ShareSuaBaiVietRequest;

class BaiVietController extends Controller
{

    public function getDanhSach(){
        $baiviet=BaiViet::all();
        return view('admin/bai_viet/danhsach',['baiviet'=>$baiviet]);
    }
    public function getThem(){
        $dokho=DoKho::all();
        $loaimon=LoaiMon::all();
        $thucdon=ThucDon::all();
        $phuongphap=PhuongPhap::all();
        $nguyenlieuchinh=NguyenLieuChinh::all();
        $amthuc=AmThuc::all();
         return view('admin/bai_viet/them',['dokho'=>$dokho,'loaimon'=>$loaimon,'thucdon'=>$thucdon,'nguyenlieuchinh'=>$nguyenlieuchinh,'phuongphap'=>$phuongphap,'amthuc'=>$amthuc]);
    }
    public function postThem(ShareBaiVietRequest $request){
        $baiviet= new BaiViet();
        $baiviet->name=$request->cc;
        if($request->hasFile('hinh')){
            $file=$request->file('hinh');
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            while(file_exists("upload/image_baiviet".$hinh)){
              $hinh=str_random(4)."_".$name;
            }
            $file->move("upload/image_baiviet",$hinh);
            $baiviet->link_image=$hinh;
        }
        $baiviet->describe=$request->describe;
        $time=$request->phut;
        $baiviet->time=$time;
        $seving=$request->songuoian;
        $baiviet->serving=$seving;
        $baiviet->user_id=Auth::user()->id;
        $baiviet->thucdon_id=$request->ThucDon;
        $baiviet->loaimon_id=$request->LoaiMon;
        $baiviet->nguyenlieuchinh_id=$request->NguyenLieuChinh;
        $baiviet->dokho_id=$request->DoKho;
        $baiviet->amthuc_id=$request->AmThuc;
        $baiviet->phuongphap_id=$request->PhuongPhap;

        if (isset($request->top_day)) {
            $baiviet->top_day = true;
        }
        if (isset($request->top_week)) {
            $baiviet->top_week = true;
        }
        $baiviet->save();

       $tennguyenlieu = Input::get('names');
       $soluongnl=Input::get('numbers');

       for($i=0; $i<count($tennguyenlieu);$i++)
        {
           $nl=new NguyenLieu();
           $nl->name=$tennguyenlieu[$i];
           $nl->soluong=$soluongnl[$i];
           $baiviet->nguyenlieus()->save($nl);
        }

        $motas=Input::get('motas');
        $hinhs=$request->file('hinh_steps');


        for($i=0; $i<count($motas);$i++)
        {
            $file=$hinhs[$i];
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            while(file_exists("upload/image_step".$hinh)){
               $hinh=str_random(4)."_".$name;
            }
            $file->move("upload/image_step",$hinh);
            $step= new BuocThucHien();
            $step->describe=$motas[$i];
            $step->link_image=$hinh;
            $baiviet->buocthuchiens()->save($step);
        }
        //tags
        if(!empty($request->tags)){
           $tags=$request->tags;
           $thes = explode(",", $tags);
           foreach($thes as $the){
               $numberTag= Tag::where('name',$the)->first();
               if($numberTag==null){
                  $newTag=new Tag();
                  $newTag->name=$the;
                  $newTag->save();
                  $baiviettag=new BaiVietTag();
                  $baiviettag->baiviet_id=$baiviet->id;
                  $baiviettag->tag_id=$newTag->id;
                  $baiviettag->save();
               }else{
                $baiviettag=new BaiVietTag();
                $baiviettag->baiviet_id=$baiviet->id;
                $baiviettag->tag_id=$numberTag->id;
                $baiviettag->save();
               }
           }
        }
        return redirect('admin/baiviet/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $baiviet=BaiViet::find($id);
        $dokho=DoKho::all();
        $loaimon=LoaiMon::all();
        $thucdon=ThucDon::all();
        $phuongphap=PhuongPhap::all();
        $nguyenlieuchinh=NguyenLieuChinh::all();
        $amthuc=AmThuc::all();
        $tags=$baiviet->tags;
        $tig=[];
        foreach($tags as $tag){
          array_push($tig,$tag->name);
        }
        $tg=implode(",", $tig);
       return view('admin/bai_viet/sua',['baiviet'=>$baiviet,'dokho'=>$dokho,'loaimon'=>$loaimon,'thucdon'=>$thucdon,'nguyenlieuchinh'=>$nguyenlieuchinh,'phuongphap'=>$phuongphap,'amthuc'=>$amthuc,'tg'=>$tg]);

    }
    public function postSua(ShareSuaBaiVietRequest $request,$id){
          $baiviet=BaiViet::find($id);
          $baiviet->name=$request->cc;
          $baiviet->describe=$request->describe;
          $time=$request->phut;
          $baiviet->time=$time;
          $seving=$request->songuoian;
          $baiviet->serving=$seving;
          $baiviet->user_id=Auth::user()->id;
          $baiviet->thucdon_id=$request->ThucDon;
          $baiviet->loaimon_id=$request->LoaiMon;
          $baiviet->nguyenlieuchinh_id=$request->NguyenLieuChinh;
          $baiviet->dokho_id=$request->DoKho;
          $baiviet->amthuc_id=$request->AmThuc;
          $baiviet->phuongphap_id=$request->PhuongPhap;
          if (isset($request->top_day)) {
            $baiviet->top_day = true;
         }
         if (isset($request->top_week)) {
            $baiviet->top_week = true;
         }
          if($request->hasFile('hinh')){
            $file=$request->file('hinh');
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            while(file_exists("upload/image_baiviet".$hinh)){
              $hinh=str_random(4)."_".$name;
            }
            unlink("upload/image_baiviet/".$baiviet->link_image);
            $file->move("upload/image_baiviet",$hinh);
            $baiviet->link_image=$hinh;
          }
       $baiviet->save();

       //Luu moi cac nguyen lieu cua mon an

       $baiviet->nguyenlieus()->delete();

       $tennguyenlieu = Input::get('names');
       $soluongnl=Input::get('numbers');
       for($i=0; $i<count($tennguyenlieu);$i++)
        {
           $nl=new NguyenLieu();
           $nl->name=$tennguyenlieu[$i];
           $nl->soluong=$soluongnl[$i];
           $baiviet->nguyenlieus()->save($nl);
        }

    //buoc thuc hien xoa cac ban ghi va luu moi
    $motas=Input::get('motas');
    $hinhs=$request->file('hinh_steps');
    $link_image=Input::get('link_image');

    $baiviet->buocthuchiens()->delete();

    for($i=0; $i<count($motas);$i++)
    {
        if($link_image[$i]!=""){
            $step= new BuocThucHien();
            $step->describe=$motas[$i];
            $step->link_image=$link_image[$i];
            $baiviet->buocthuchiens()->save($step);
        }else{
            $file=$hinhs[$i];
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            while(file_exists("upload/image_step".$hinh)){
                 $hinh=str_random(4)."_".$name;
            }
            $file->move("upload/image_step",$hinh);
            $step= new BuocThucHien();
            $step->describe=$motas[$i];
            $step->link_image=$hinh;
            $baiviet->buocthuchiens()->save($step);
        }
    }
    //tags
    $baiviet->tags()->detach();

    if(!empty($request->tags)){
        $tags=$request->tags;
        $thes = explode(",", $tags);
        foreach($thes as $the){
            $numberTag= Tag::where('name',$the)->first();
            if($numberTag==null){
               $newTag=new Tag();
               $newTag->name=$the;
               $newTag->save();
               $baiviet->tags()->attach($newTag);
             /*  $baiviettag=new BaiVietTag();
               $baiviettag->baiviet_id=$baiviet->id;
               $baiviettag->tag_id=$newTag->id;
               $baiviettag->save();*/
            }else{
                $baiviet->tags()->attach($numberTag);
            /* $baiviettag=new BaiVietTag();
             $baiviettag->baiviet_id=$baiviet->id;
             $baiviettag->tag_id=$numberTag->id;
             $baiviettag->save();*/
            }
        }
     }
          return redirect('admin/baiviet/danhsach')->with('thongbao','Sửa thành công');
    }
    public function xoa(){

    }
    public function getChiTiet(){
          return view('pages/baiviet');
    }
}
