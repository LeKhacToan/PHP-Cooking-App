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
    public function utf8convert($str)
    {

        if (!$str) return false;

        $utf8 = array(

            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'd' => 'đ|Đ',

            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'i' => 'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );

        foreach ($utf8 as $ascii => $uni) $str = preg_replace("/($uni)/i", $ascii, $str);

        return $str;
    }
    public function postSearch(Request $request)
    {
        $name = $request->tenmonan;
        $monan = BaiViet::all();
        if ($name != "") {
            //tim mon an
            $baiviet=BaiViet::all();
            foreach($baiviet as $bv){
                $bv->name=utf8convert($bv->name);
            }
            $monan = BaiViet::where('name', 'like', "%{$name}%")->get();
            $monan=$baiviet::where('name', 'like', "%{$name}%");
        }
        $dokho = DoKho::all();
        $loaimon = LoaiMon::all();
        $thucdon = ThucDon::all();
        $phuongphap = PhuongPhap::all();
        $nguyenlieuchinh = NguyenLieuChinh::all();
        $amthuc = AmThuc::all();
        return view('pages/search', ['monan' => $monan, 'dokho' => $dokho, 'loaimon' => $loaimon, 'thucdon' => $thucdon, 'nguyenlieuchinh' => $nguyenlieuchinh, 'phuongphap' => $phuongphap, 'amthuc' => $amthuc]);
    }
    public function postadSearch(Request $request)
    {
        $mangInput = array('amthuc', 'nguyenlieuchinh', 'phuongphap', 'loaimon', 'dokho', 'thucdon');
        $monan = BaiViet::all();
        for ($i = 0; $i < 6; $i++) {
            $input = $request->input($mangInput[$i]);
            if (isset($input)) {
                $value = Input::get($mangInput[$i]);
                $monan = $monan->whereIn($mangInput[$i] . '_id', $value);
            }
        }
        $data = view("pages/monan", compact('monan'))->render();
        return response()->json(['html' => $data]);
    }
}
