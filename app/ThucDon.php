<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThucDon extends Model
{
    //
    protected $table ="thucdon";
    public function baiviets(){
        return $this->hasMany('App\BaiViet');
    }
}
