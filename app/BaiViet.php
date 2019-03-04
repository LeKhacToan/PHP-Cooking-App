<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    //
    protected $table ="baiviet";

    public function nguyenlieus(){
        return $this->hasMany('App\NguyenLieu','baiviet_id');
    }
    public function buocthuchiens(){
        return $this->hasMany('App\BuocThucHien','baiviet_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function amthuc(){
        return $this->belongsTo('App\AmThuc','amthuc_id','id');
    }
    public function dokho(){
        return $this->belongsTo('App\DoKho');
    }
    public function loaimon(){
        return $this->belongsTo('App\LoaiMon');
    }
    public function nguyenlieuchinh(){
        return $this->belongsTo('App\NguyenLieuChinh');
    }
    public function phuongphap(){
        return $this->belongsTo('App\PhuongPhap');
    }
    public function thucdon(){
        return $this->belongsTo('App\ThucDon','thucdon_id');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag','baiviet_tag','baiviet_id','tag_id');
    }
}
