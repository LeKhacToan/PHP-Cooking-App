<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/heroku', function () {
    return view('welcome');
});
Route::get('/', function () {
    echo "grrfrfrfrfrfrf";
});


//Route::get('/','BaiVietController@home');
Route::get('topweek/{id}','BaiVietController@topweek');
Route::get('newpost/{id}','BaiVietController@newpost');
Route::get('savepost/{id}','BaiVietController@savepost');
Route::get('saved/{id}','BaiVietController@saved');
Route::get('thongtin/{id}','UserController@suaUser');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
Route::post('search','SearchController@postSearch');
Route::post('search/advance','SearchController@postadSearch');
Route::post('user/sua/{id}','UserController@sua');


Route::get('dangky','UserController@getDangKy');
Route::post('dangky','UserController@postDangKy');
Route::post('comment','BaiVietController@postComment');
Route::post('rate','BaiVietController@postRate');
Route::get('baiviet/{id}','BaiVietController@getChiTiet');
Route::get('trangcanhan/{id}','UserController@getChiTiet');
Route::post('baiviet/them', 'BaiVietController@new');
Route::get('baiviet/sua/{id}','BaiVietController@baivietsua');
Route::post('baiviet/sua/{id}','BaiVietController@postbaivietsua');

Route::get('thu',function(){
    if(DB::connection()->getDatabaseName())
{
   echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
}
});
//,'middleware'=>'adminLogin'
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach', 'UserController@getDanhSach');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}', 'UserController@xoa');
    });

    Route::group(['prefix' => 'loaimon'], function () {
        Route::get('danhsach', 'LoaiMonController@getDanhSach');

        Route::get('sua/{id}', 'LoaiMonController@getSua');
        Route::post('sua/{id}', 'LoaiMonController@postSua');

        Route::get('them', 'LoaiMonController@getThem');
        Route::post('them', 'LoaiMonController@postThem');

        Route::get('xoa/{id}', 'LoaiMonController@xoa');
    });
    Route::group(['prefix' => 'thucdon'], function () {
        Route::get('danhsach', 'ThucDonController@getDanhSach');

        Route::get('sua/{id}', 'ThucDonController@getSua');
        Route::post('sua/{id}', 'ThucDonController@postSua');

        Route::get('them', 'ThucDonController@getThem');
        Route::post('them', 'ThucDonController@postThem');

        Route::get('xoa/{id}', 'ThucDonController@xoa');
    });
    Route::group(['prefix' => 'baiviet'], function () {
        Route::get('danhsach', 'BaiVietController@getDanhSach');

        Route::get('sua/{id}', 'BaiVietController@getSua');
        Route::post('sua/{id}', 'BaiVietController@postSua');

        Route::get('them', 'BaiVietController@getThem');
        Route::post('them', 'BaiVietController@postThem');

        Route::get('xoa/{id}', 'BaiVietController@xoa');
    });
    Route::group(['prefix' => 'nguyenlieuchinh'], function () {
        Route::get('danhsach', 'NguyenLieuChinhController@getDanhSach');

        Route::get('sua/{id}', 'NguyenLieuChinhController@getSua');
        Route::post('sua/{id}', 'NguyenLieuChinhController@postSua');

        Route::get('them', 'NguyenLieuChinhController@getThem');
        Route::post('them', 'NguyenLieuChinhController@postThem');

        Route::get('xoa/{id}', 'NguyenLieuChinhController@xoa');
    });
    Route::group(['prefix' => 'dokho'], function () {
        Route::get('danhsach', 'DoKhoController@getDanhSach');

        Route::get('sua/{id}', 'DoKhoController@getSua');
        Route::post('sua/{id}', 'DoKhoController@postSua');

        Route::get('them', 'DoKhoController@getThem');
        Route::post('them', 'DoKhoController@postThem');

        Route::get('xoa/{id}', 'DoKhoController@xoa');
    });
    Route::group(['prefix' => 'amthuc'], function () {
        Route::get('danhsach', 'AmThucController@getDanhSach');

        Route::get('sua/{id}', 'AmThucController@getSua');
        Route::post('sua/{id}', 'AmThucController@postSua');

        Route::get('them', 'AmThucController@getThem');
        Route::post('them', 'AmThucController@postThem');

        Route::get('xoa/{id}', 'AmThucController@xoa');
    });
    Route::group(['prefix' => 'phuongphap'], function () {
        Route::get('danhsach', 'PhuongPhapController@getDanhSach');

        Route::get('sua/{id}', 'PhuongPhapController@getSua');
        Route::post('sua/{id}', 'PhuongPhapController@postSua');

        Route::get('them', 'PhuongPhapController@getThem');
        Route::post('them', 'PhuongPhapController@postThem');

        Route::get('xoa/{id}', 'PhuongPhapController@xoa');
    });

});

Route::get('mon/moi','BaiVietController@monmoi');
Route::get('list/new/{list}','BaiVietController@getList');
Auth::routes();

Route::get('/home', 'BaiVietController@home')->name('home');
