<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuocThucHien extends Model
{
    //
    protected $table ="buocthuchien";
    public function baiviet(){
        return $this->belongsTo('App\BaiViet');
    }
}
