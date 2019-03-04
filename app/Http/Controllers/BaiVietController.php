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

class BaiVietController extends Controller
{
    //
    public function getDanhSach(){

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
    public function postThem(Request $request){
     /*  $this->validate($request, [
            'name' => 'required|min:6|max:255|unique:',
            'hinh'=>'required|mimes:jpeg,jpg,png,gif',
            'describe'=>'required|min:20',
            'songuoian'=>'required|numeric|min:1',
            'name[]'=>'required',
            'number[]'=>'required',
            'mota[]'=>'requred',
            'hinh_step[]'=>'required|mimes:jpeg,jpg,png,gif',



        ], [
            'name.required' => 'Bạn chưa nhập tên món ăn',
            'name.min' => 'Tên ít nhất là 6 kí tự',
            'name.max' => 'Tên nhiều nhất 255 kí tự',
            'hinh.required'=>'Bạn chưa thêm hình ảnh cho món ăn',
            'hinh.mines'=>'File hình ảnh không đúng định dạng',
            'describe.required'=>'Hãy mô tả về món ăn của bạn',
            'describe.min'=>'Hãy mô tả về món ăn của bạn nhỏ nhất 20 kí tự',
            'songuoian.required'=>'Số người ăn',
            'songuoian.numeric'=>'Số người ăn bạn nhập không phải là số',
            'songuoian.min'=>'Số người ăn nhỏ nhất là 1',
            'name[].required'=>'Điền đầy đủ tên nguyên liệu',
            'number[].required'=>'Điền đủ số lượng ',
            'mota[].required'=>'Hãy mô tả đủ các bước',
            'hinh_step[].mines'=>'Hãy chắc chắn định dạng file ảnh',
            'hinh_step[].required'=>'Thêm hình cho các bước',

        ]);


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
        $time=$request->gio . " giờ" ." ". $request->phut ." phút";
        $baiviet->time=$time;
        $seving=$request->songuoian ." người";
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
        echo $baiviet->id;

       $tennguyenlieu = Input::get('name');
        $soluongnl=Input::get('number');

       for($i=0; $i<count($tennguyenlieu);$i++)
        {
           $nl=new NguyenLieu();
           $nl->name=$tennguyenlieu[$i];
           $nl->soluong=$soluongnl[$i];
           $baiviet->nguyenlieus()->save($nl);
        }

        $motas=Input::get('mota');
        $hinhs=$request->file('hinh_step');
        $hinh_step=$hinhs[0];
        $name=$hinh_step->getClientOriginalName();


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
        } */
        //tags
        if(!empty($request->tags)){
            $tags=$request->tags;
           $thes = explode(",", $tags);
           foreach($thes as $the){
               $numberTag= Tag::where('name',$the)->count();
               if($numberTag==0){
                  $newTag=new Tag();
                  $newTag->name=$the;
                  $newTag->save();
                  $baiviet->tags()->attach($newTag);
               }
               echo $the;
           }
        }
        else{
            echo "no result";
        }
      //  return redirect('admin/baiviet/them')->with('thongbao','Thêm thành công');
    }
    public function getSua(){

    }
    public function postSua(){

    }
    public function xoa(){

    }
}
