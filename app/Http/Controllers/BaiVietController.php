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
use App\binhluan;
use App\Tag;
use App\Rate;
use App\ThongBao;
use App\User;
use App\Http\Requests\ShareBaiVietRequest;
use App\Http\Requests\ShareSuaBaiVietRequest;
use App\LuuBaiViet;

class BaiVietController extends Controller
{

    public function getDanhSach()
    {
        $baiviet = BaiViet::all();
        return view('admin/bai_viet/danhsach', ['baiviet' => $baiviet]);
    }
    public function getThem()
    {
        $dokho = DoKho::all();
        $loaimon = LoaiMon::all();
        $thucdon = ThucDon::all();
        $phuongphap = PhuongPhap::all();
        $nguyenlieuchinh = NguyenLieuChinh::all();
        $amthuc = AmThuc::all();
        return view('admin/bai_viet/them', ['dokho' => $dokho, 'loaimon' => $loaimon, 'thucdon' => $thucdon, 'nguyenlieuchinh' => $nguyenlieuchinh, 'phuongphap' => $phuongphap, 'amthuc' => $amthuc]);
    }
    public function postThem(ShareBaiVietRequest $request)
    {
        $baiviet = new BaiViet();
        $baiviet->name = $request->cc;
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/image_baiviet" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $file->move("upload/image_baiviet", $hinh);
            $baiviet->link_image = $hinh;
        }
        $baiviet->describe = $request->describe;
        $time = $request->phut;
        $baiviet->time = $time;
        $seving = $request->songuoian;
        $baiviet->serving = $seving;
        $baiviet->user_id = Auth::user()->id;
        $baiviet->thucdon_id = $request->ThucDon;
        $baiviet->loaimon_id = $request->LoaiMon;
        $baiviet->nguyenlieuchinh_id = $request->NguyenLieuChinh;
        $baiviet->dokho_id = $request->DoKho;
        $baiviet->amthuc_id = $request->AmThuc;
        $baiviet->phuongphap_id = $request->PhuongPhap;

        if (isset($request->top_day)) {
            $baiviet->top_day = true;
        }
        if (isset($request->top_week)) {
            $baiviet->top_week = true;
        }
        $baiviet->save();

        $tennguyenlieu = Input::get('names');
        $soluongnl = Input::get('numbers');

        for ($i = 0; $i < count($tennguyenlieu); $i++) {
            $nl = new NguyenLieu();
            $nl->name = $tennguyenlieu[$i];
            $nl->soluong = $soluongnl[$i];
            $baiviet->nguyenlieus()->save($nl);
        }

        $motas = Input::get('motas');
        $hinhs = $request->file('hinh_steps');


        for ($i = 0; $i < count($motas); $i++) {
            $file = $hinhs[$i];
            $name = $file->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/image_step" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $file->move("upload/image_step", $hinh);
            $step = new BuocThucHien();
            $step->describe = $motas[$i];
            $step->link_image = $hinh;
            $baiviet->buocthuchiens()->save($step);
        }
        //tags
        if (!empty($request->tags)) {
            $tags = $request->tags;
            $thes = explode(",", $tags);
            foreach ($thes as $the) {
                $numberTag = Tag::where('name', $the)->first();
                if ($numberTag == null) {
                    $newTag = new Tag();
                    $newTag->name = $the;
                    $newTag->save();
                    $baiviettag = new BaiVietTag();
                    $baiviettag->baiviet_id = $baiviet->id;
                    $baiviettag->tag_id = $newTag->id;
                    $baiviettag->save();
                } else {
                    $baiviettag = new BaiVietTag();
                    $baiviettag->baiviet_id = $baiviet->id;
                    $baiviettag->tag_id = $numberTag->id;
                    $baiviettag->save();
                }
            }
        }
        return redirect('admin/baiviet/them')->with('thongbao', 'Thêm thành công');
    }
    public function getSua($id)
    {
        $baiviet = BaiViet::find($id);
        $dokho = DoKho::all();
        $loaimon = LoaiMon::all();
        $thucdon = ThucDon::all();
        $phuongphap = PhuongPhap::all();
        $nguyenlieuchinh = NguyenLieuChinh::all();
        $amthuc = AmThuc::all();
        $tags = $baiviet->tags;
        $tig = [];
        foreach ($tags as $tag) {
            array_push($tig, $tag->name);
        }
        $tg = implode(",", $tig);
        return view('admin/bai_viet/sua', ['baiviet' => $baiviet, 'dokho' => $dokho, 'loaimon' => $loaimon, 'thucdon' => $thucdon, 'nguyenlieuchinh' => $nguyenlieuchinh, 'phuongphap' => $phuongphap, 'amthuc' => $amthuc, 'tg' => $tg]);

    }
    public function postSua(ShareSuaBaiVietRequest $request, $id)
    {
        $baiviet = BaiViet::find($id);
        $baiviet->name = $request->cc;
        $baiviet->describe = $request->describe;
        $time = $request->phut;
        $baiviet->time = $time;
        $seving = $request->songuoian;
        $baiviet->serving = $seving;
        $baiviet->user_id = Auth::user()->id;
        $baiviet->thucdon_id = $request->ThucDon;
        $baiviet->loaimon_id = $request->LoaiMon;
        $baiviet->nguyenlieuchinh_id = $request->NguyenLieuChinh;
        $baiviet->dokho_id = $request->DoKho;
        $baiviet->amthuc_id = $request->AmThuc;
        $baiviet->phuongphap_id = $request->PhuongPhap;
        if (isset($request->top_day)) {
            $baiviet->top_day = true;
        }
        if (isset($request->top_week)) {
            $baiviet->top_week = true;
        }
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/image_baiviet" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
           // unlink("upload/image_baiviet/" . $baiviet->link_image);
            $file->move("upload/image_baiviet", $hinh);
            $baiviet->link_image = $hinh;
        }
        $baiviet->save();

       //Luu moi cac nguyen lieu cua mon an

        $baiviet->nguyenlieus()->delete();

        $tennguyenlieu = Input::get('names');
        $soluongnl = Input::get('numbers');
        for ($i = 0; $i < count($tennguyenlieu); $i++) {
            $nl = new NguyenLieu();
            $nl->name = $tennguyenlieu[$i];
            $nl->soluong = $soluongnl[$i];
            $baiviet->nguyenlieus()->save($nl);
        }
    //buoc thuc hien xoa cac ban ghi va luu moi
        $motas = Input::get('motas');
        $hinhs = $request->file('hinh_steps');
        $link_image = Input::get('link_image');

        $baiviet->buocthuchiens()->delete();

        for ($i = 0; $i < count($motas); $i++) {
            if ($link_image[$i] != "") {
                $step = new BuocThucHien();
                $step->describe = $motas[$i];
                $step->link_image = $link_image[$i];
                $baiviet->buocthuchiens()->save($step);
            } else {
                $file = $hinhs[$i];
                $name = $file->getClientOriginalName();
                $hinh = str_random(4) . "_" . $name;
                while (file_exists("upload/image_step" . $hinh)) {
                    $hinh = str_random(4) . "_" . $name;
                }
                $file->move("upload/image_step", $hinh);
                $step = new BuocThucHien();
                $step->describe = $motas[$i];
                $step->link_image = $hinh;
                $baiviet->buocthuchiens()->save($step);
            }
        }
    //tags
        $baiviet->tags()->detach();

        if (!empty($request->tags)) {
            $tags = $request->tags;
            $thes = explode(",", $tags);
            foreach ($thes as $the) {
                $numberTag = Tag::where('name', $the)->first();
                if ($numberTag == null) {
                    $newTag = new Tag();
                    $newTag->name = $the;
                    $newTag->save();
                    $baiviet->tags()->attach($newTag);
             /*  $baiviettag=new BaiVietTag();
               $baiviettag->baiviet_id=$baiviet->id;
               $baiviettag->tag_id=$newTag->id;
               $baiviettag->save();*/
                } else {
                    $baiviet->tags()->attach($numberTag);
            /* $baiviettag=new BaiVietTag();
             $baiviettag->baiviet_id=$baiviet->id;
             $baiviettag->tag_id=$numberTag->id;
             $baiviettag->save();*/
                }
            }
        }
        return redirect('admin/baiviet/danhsach')->with('thongbao', 'Sửa thành công');
    }

    public function getChiTiet($id)
    {
        if(BaiViet::where('id',$id)->exists()){
            $baiviet=BaiViet::find($id);
            $rate=Rate::where('baiviet_id',$id);
            $countRate=$rate->count();
            $sumRate=$rate->avg('point');
            $random=BaiViet::orderByRaw("RAND()")->get()->take(4);
            $random1=BaiViet::orderByRaw("RAND()")->get()->take(4);
            return view('pages/baiviet',['baiviet'=>$baiviet,'rate'=>$countRate,'sum'=>$sumRate,'random'=>$random,'random1'=>$random1]);
         }
         else{
            return response()->json([
                'message' => 'Trang khong ton tai',
            ], 404);
         }

    }
    public function new(ShareBaiVietRequest $request)
    {

        $baiviet = new BaiViet();
        $baiviet->name = $request->cc;
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/image_baiviet" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $file->move("upload/image_baiviet", $hinh);
            $baiviet->link_image = $hinh;
        }
        $baiviet->describe = $request->describe;
        $time = $request->phut;
        $baiviet->time = $time;
        $seving = $request->songuoian;
        $baiviet->serving = $seving;
        $baiviet->user_id = Auth::user()->id;
        $baiviet->thucdon_id = $request->ThucDon;
        $baiviet->loaimon_id = $request->LoaiMon;
        $baiviet->nguyenlieuchinh_id = $request->NguyenLieuChinh;
        $baiviet->dokho_id = $request->DoKho;
        $baiviet->amthuc_id = $request->AmThuc;
        $baiviet->phuongphap_id = $request->PhuongPhap;

        if (isset($request->top_day)) {
            $baiviet->top_day = true;
        }
        if (isset($request->top_week)) {
            $baiviet->top_week = true;
        }
        $baiviet->save();

        $tennguyenlieu = Input::get('names');
        $soluongnl = Input::get('numbers');

        for ($i = 0; $i < count($tennguyenlieu); $i++) {
            $nl = new NguyenLieu();
            $nl->name = $tennguyenlieu[$i];
            $nl->soluong = $soluongnl[$i];
            $baiviet->nguyenlieus()->save($nl);
        }

        $motas = Input::get('motas');
        $hinhs = $request->file('hinh_steps');


        for ($i = 0; $i < count($motas); $i++) {
            $file = $hinhs[$i];
            $name = $file->getClientOriginalName();
            $hinh = str_random(4) . "_" . $name;
            while (file_exists("upload/image_step" . $hinh)) {
                $hinh = str_random(4) . "_" . $name;
            }
            $file->move("upload/image_step", $hinh);
            $step = new BuocThucHien();
            $step->describe = $motas[$i];
            $step->link_image = $hinh;
            $baiviet->buocthuchiens()->save($step);
        }
        //tags
        if (!empty($request->tags)) {
            $tags = $request->tags;
            $thes = explode(",", $tags);
            foreach ($thes as $the) {
                $numberTag = Tag::where('name', $the)->first();
                if ($numberTag == null) {
                    $newTag = new Tag();
                    $newTag->name = $the;
                    $newTag->save();
                    $baiviettag = new BaiVietTag();
                    $baiviettag->baiviet_id = $baiviet->id;
                    $baiviettag->tag_id = $newTag->id;
                    $baiviettag->save();
                } else {
                    $baiviettag = new BaiVietTag();
                    $baiviettag->baiviet_id = $baiviet->id;
                    $baiviettag->tag_id = $numberTag->id;
                    $baiviettag->save();
                }
            }
        }
        return redirect('trangcanhan/'.$baiviet->user_id)->with('thongbao','Thêm thành công');
    }
    public function baivietsua($id)
    {
        $baiviet = BaiViet::find($id);
        $dokho = DoKho::all();
        $loaimon = LoaiMon::all();
        $thucdon = ThucDon::all();
        $phuongphap = PhuongPhap::all();
        $nguyenlieuchinh = NguyenLieuChinh::all();
        $amthuc = AmThuc::all();
        $tags = $baiviet->tags;
        $tig = [];
        foreach ($tags as $tag) {
            array_push($tig, $tag->name);
        }
        $tg = implode(",", $tig);

        if (Auth::check()) {
            //la chu bai viet
            if ($baiviet->user_id == Auth::user()->id) {
                return view('pages.suabai', ['baiviet' => $baiviet, 'dokho' => $dokho, 'loaimon' => $loaimon, 'thucdon' => $thucdon, 'nguyenlieuchinh' => $nguyenlieuchinh, 'phuongphap' => $phuongphap, 'amthuc' => $amthuc, 'tg' => $tg]);
            }
            //khong la chu bai viet return 404 not found
            else {
                return response()->json([
                    'message' => 'Trang khong ton tai',
                ], 404);
            }
        }
        //chua dang nhap return 404 not found
        else {
            return response()->json([
                'message' => 'Trang khong ton tai',
            ], 404);
        }

    }
    public function postbaivietsua(ShareSuaBaiVietRequest $request, $id)
    {
        $baiviet = BaiViet::find($id);
        if (Auth::check()) {
            //la chu bai viet
            if ($baiviet->user_id == Auth::user()->id) {
                $baiviet = BaiViet::find($id);
                $baiviet->name = $request->cc;
                $baiviet->describe = $request->describe;
                $time = $request->phut;
                $baiviet->time = $time;
                $seving = $request->songuoian;
                $baiviet->serving = $seving;
                $baiviet->user_id = Auth::user()->id;
                $baiviet->thucdon_id = $request->ThucDon;
                $baiviet->loaimon_id = $request->LoaiMon;
                $baiviet->nguyenlieuchinh_id = $request->NguyenLieuChinh;
                $baiviet->dokho_id = $request->DoKho;
                $baiviet->amthuc_id = $request->AmThuc;
                $baiviet->phuongphap_id = $request->PhuongPhap;
                if (isset($request->top_day)) {
                    $baiviet->top_day = true;
                }
                if (isset($request->top_week)) {
                    $baiviet->top_week = true;
                }
                if ($request->hasFile('hinh')) {
                    $file = $request->file('hinh');
                    $name = $file->getClientOriginalName();
                    $hinh = str_random(4) . "_" . $name;
                    while (file_exists("upload/image_baiviet" . $hinh)) {
                        $hinh = str_random(4) . "_" . $name;
                    }
                  //  unlink("upload/image_baiviet/" . $baiviet->link_image);
                    $file->move("upload/image_baiviet", $hinh);
                    $baiviet->link_image = $hinh;
                }
                $baiviet->save();

       //Luu moi cac nguyen lieu cua mon an

                $baiviet->nguyenlieus()->delete();
                $tennguyenlieu = Input::get('names');
                $soluongnl = Input::get('numbers');
                for ($i = 0; $i < count($tennguyenlieu); $i++) {
                    $nl = new NguyenLieu();
                    $nl->name = $tennguyenlieu[$i];
                    $nl->soluong = $soluongnl[$i];
                    $baiviet->nguyenlieus()->save($nl);
                }

    //buoc thuc hien xoa cac ban ghi va luu moi
                $motas = Input::get('motas');
                $hinhs = $request->file('hinh_steps');
                $link_image = Input::get('link_image');

                $baiviet->buocthuchiens()->delete();

                for ($i = 0; $i < count($motas); $i++) {
                    if ($link_image[$i]!= "") {
                        $step = new BuocThucHien();
                        $step->describe = $motas[$i];
                        $step->link_image = $link_image[$i];
                        $baiviet->buocthuchiens()->save($step);
                    } else {
                        $file = $hinhs[$i];
                        $name = $file->getClientOriginalName();
                        $hinh = str_random(4) . "_" . $name;
                        while (file_exists("upload/image_step" . $hinh)) {
                            $hinh = str_random(4) . "_" . $name;
                        }
                        $file->move("upload/image_step", $hinh);
                        $step = new BuocThucHien();
                        $step->describe = $motas[$i];
                        $step->link_image = $hinh;
                        $baiviet->buocthuchiens()->save($step);
                    }
                }
    //tags
                $baiviet->tags()->detach();
                if (!empty($request->tags)) {
                    $tags = $request->tags;
                    $thes = explode(",", $tags);
                    foreach ($thes as $the) {
                        $numberTag = Tag::where('name', $the)->first();
                        if ($numberTag == null) {
                            $newTag = new Tag();
                            $newTag->name = $the;
                            $newTag->save();
                        } else {
                            $baiviet->tags()->attach($numberTag);
                        }
                    }
                }
                return redirect('trangcanhan/'.$baiviet->user_id)->with('thongbao','thanh cong');
            }
            //khong la chu bai viet return 404 not found
            else {
                return response()->json([
                    'message' => 'Trang khong ton tai',
                ], 404);
            }
        }
        //chua dang nhap return 404 not found
        else {
            return response()->json([
                'message' => 'Trang khong ton tai',
            ], 404);
        }
    }
    public function postComment(Request $request){
        if(Auth::check()){
            $comment = $request->comment;
            $baiviet_id=$request->id;
            $baiviet=BaiViet::where('id',$baiviet_id)->first();
            $binhluan=new binhluan();
            $binhluan->baiviet_id=$baiviet_id;
            $binhluan->user_id=Auth::user()->id;
            $binhluan->content=$comment;
            $binhluan->save();

           if($binhluan->user_id !=$baiviet->user_id){
              $thongbao = new ThongBao();
              $thongbao->content= Auth::user()->name." đã bình luận bài viết của bạn";
              $thongbao->user_id= $baiviet->user_id;
              $thongbao->link= "baiviet/".$baiviet_id;
              $thongbao->save();
           }

            $data=view("pages/comment",compact('binhluan'))->render();
            return response()->json(['html'=>$data]);
        }
    }
    public function postRate(Request $request){
        if(Auth::check()){
            $user_id=Auth::user()->id;
            $baiviet_id=$request->id;
            if(Rate::where('user_id',$user_id)->where('baiviet_id',$baiviet_id)->exists()){
                $data="ban da rate cho bai viet nay" ;
                return response()->json(['html'=>$data]);
            }
            else{
                $rate=new Rate();
                $baiviet=BaiViet::where('id',$baiviet_id)->first();
                $rate->point=$request->point;
                $rate->user_id=$user_id;
                $rate->baiviet_id=$baiviet_id;
                $rate->save();

                if(Auth::user()->id != $baiviet->user_id){
                    $thongbao= new ThongBao();
                    $thongbao->content="".Auth::user()->name." đã xếp hạng bài viết của bạn ".$rate->point." điểm";
                    $thongbao->user_id=$baiviet->user_id;
                    $thongbao->link="baiviet/".$baiviet_id;
                    $thongbao->save();
                   }

                $data="thanh cong" ;
                return response()->json(['html'=>$data]);
            }
        }
        else{
            $data="Bạn chưa đăng nhập" ;
            return response()->json(['html'=>$data]);
        }
    }
    public function xoa($id)
    {
        // if(BaiViet::where('id',$id)->exists()){
        //     $baiviet=BaiViet::find($id);
        //     if(Auth::user()->role==1||Auth::user()->id==$baiviet->user_id){
        //         $baiviet->tags()->detach();
        //         $binhluan=binhluan::where('baiviet_id',$id);
        //         $binhluan->delete();
        //         $nl=NguyenLieu::where('baiviet_id',$id);
        //         $nl->delete();
        //         $bth=BuocThucHien::where('baiviet_id',$id);
        //         $bth->delete();
        //         $rate=Rate::where('baiviet_id',$id);
        //         $rate->delete();

        //     }
        // }

    }
    public function home(){
        $baiviet=BaiViet::where('top_day',1);
        $topDay=$baiviet->orderBy('updated_at', 'desc')->limit(1)->first();
        $baiviet=BaiViet::where('top_week',1);
        $postWeek=$baiviet->orderBy('updated_at', 'desc')->limit(4)->get();
        $newPost=BaiViet::orderBy('created_at','desc')->take(12)->get();
        $random=BaiViet::orderByRaw("RAND()")->get()->take(6);
        return view('pages/home',['postWeek'=>$postWeek,'newPost'=>$newPost,'topDay'=>$topDay,'random'=>$random]);
    }
    public function topweek($id){
        $id=$id-1;
        $baiviet=BaiViet::where('top_week',1);
        $monan=$baiviet->orderBy('updated_at', 'desc')->skip($id*4)->take(4)->get();
        $data=view("pages/monan",compact('monan'))->render();
         return response()->json(['html'=>$data]);
    }
    public function newpost($id){
        $id=$id-1;
        $monan=BaiViet::orderBy('created_at', 'desc')->skip($id*12)->take(12)->get();
        $data=view("pages/monan",compact('monan'))->render();
         return response()->json(['html'=>$data]);
    }
    public function savepost($id){
        $data="";
        if(BaiViet::where('id',$id)->exists()){
            if(Auth::check()){
                $baiviet=BaiViet::find($id);
                $user_id=Auth::user()->id;
                //Người lưu không phải chủ bài viết
                if($baiviet->user_id!=$user_id){
                      //kiem tra đa luu bai viet roi;
                       if(LuuBaiViet::where(['user_id'=>$user_id,'baiviet_id'=>$id])->exists()){
                            $data="Ban da luu bai viet nay";
                       }
                       else{
                        $luubaiviet=new LuuBaiViet();
                        $luubaiviet->baiviet_id=$id;
                        $luubaiviet->user_id= $user_id;
                        $luubaiviet->save();
                        $data="Lưu thành công";
                       }

                }
                else{
                    $data="Ban la chu bai viet";
                }
            }
            else{
                $data="Bạn chưa đăng nhập";
            }

        }
        else{
            $data="Error";
        }
        return response()->json(['html'=>$data]);
    }
    public function saved($id){
        $data='error';
        if(User::where('id',$id)->exists()){
            if(Auth::user()->id==$id){
                $user=User::where('id',$id)->first();
                $monan=$user->baivietluu;
                $data=view("pages/monan",compact('monan'))->render();
            }
        }
        return response()->json(['html'=>$data]);
    }
    public function monmoi(){
        $monan=BaiViet::orderBy('created_at','desc')->take(12)->get();
        return view('pages.monanmoi',['monan'=>$monan]);
    }
    public function getList($list){
        $monan=BaiViet::orderBy('created_at','desc')->skip(($list-1)*12)->take(12)->get();
        $data=view("pages/monan",compact('monan'))->render();
        return response()->json(['html'=>$data]);
    }
}
