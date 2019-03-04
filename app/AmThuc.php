<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmThuc extends Model
{
    protected $table ="amthuc";
    public function baiviets(){
        return $this->hasMany('App\BaiViet','amthuc_id','id');
    }
    //
}
