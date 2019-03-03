<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    //
    protected $table ="nguyenlieu";
    public function baiviet(){
        return $this->belongsTo('App\BaiViet');
    }
}
