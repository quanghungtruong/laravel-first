<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('introduce',function(){
    echo 'Well come to Laravel ';
    echo 'Well come to Laravel ';
});
Route::group(['prefix'=>'tin-tuc'],function(){

    Route::get('du-lich',function(){
        echo 'Du lich sinh thai';
    });
    Route::get('the-thao',function(){
       $bong_da='Real Marid is become champion';
       return view('site.TheThao',compact('bong_da'));
    });
    Route::get('giai-tri','TinTucController@getGiaiTri');
    Route::get('san-pham','TinTucController@getProduct');
    Route::get('category',function(){
        $data=App\Models\Category::find(4)->reProduct()->get()->toArray();
        print_r($data);
    });
});
View::share('title','Đây là Laravel first');

Route::get('schema/create',function(){
    Schema::create('khoa',function($table){
        $table->increments('id');
        $table->string('ten_khoa');
        $table->integer('so_luong');
    });
});
