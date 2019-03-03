<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    //
    protected $table ="baiviet";

    public function nguyenlieus(){
        return $this->hasMany('App\NguyenLieu');
    }
    public function buocthuchiens(){
        return $this->hasMany('App\BuocThucHien');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function amthuc(){
        return $this->hasOne('App\AmThuc');
    }
    public function dokho(){
        return $this->hasOne('App\DoKho');
    }
    public function loaimon(){
        return $this->hasOne('App\LoaiMon');
    }
    public function nguyenlieuchinh(){
        return $this->hasOne('App\NguyenLieuChinh');
    }
    public function phuongphap(){
        return $this->hasOne('App\PhuongPhap');
    }
    public function thucdon(){
        return $this->hasOne('App\ThucDon');
    }
}
