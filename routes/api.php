<?php

use Illuminate\Http\Request;
use App\BaiViet;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('top_week/{id}', function ($id) {

    $baiviet=BaiViet::where('top_week',1);
    $monan=$baiviet->orderBy('created_at', 'desc')->skip($id*8)->take(8)->get();
    $post=array();
    foreach($monan as $mn){
        $image="https://cookingbamboo.herokuapp.com/upload/image_baiviet/".$mn->link_image;
        $data=array("id"=>$mn->id,"title"=>$mn->name,"url_image"=>$image,"time"=>$mn->time." phút","auth"=>$mn->user->name);
        array_push($post,$data);
    }

    return json_encode($post,JSON_UNESCAPED_UNICODE);

});

Route::get('dish/{id}',function($id){

     $baiviet=BaiViet::orderBy('created_at', 'desc')->skip($id*8)->take(8)->get();
     $post=array();
     foreach($baiviet as $bv){
         $image="https://cookingbamboo.herokuapp.com/upload/image_baiviet/".$bv->link_image;
         $data=array("id"=>$bv->id,"title"=>$bv->name,"url_image"=>$image,"time"=>$bv->time." phút","auth"=>$bv->user->name);
         array_push($post,$data);
     }

     return json_encode($post,JSON_UNESCAPED_UNICODE);

});




