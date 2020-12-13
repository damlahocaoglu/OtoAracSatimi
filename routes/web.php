<?php

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

Route::get('/base', function () {
    return view('base');
});
Route::get('hakkimizda',function(){
    return view('hakkimizda');
});

Route::get('urunler','ArabaController@urunler')->name('urunler');
Route::get('arabaekle','ArabaController@ekle')->name('arabaekle');
Route::get('iletisim','ArabaController@iletisim')->name('iletisim');
Route::post('iletisimform','ArabaController@iletisimform')->name('iletisimform');
Route::post('arabaeklepost','ArabaController@arabaeklepost')->name('arabaeklepost');
Route::get('arabaduzenle/{id}','ArabaController@arabaduzenle')->name('arabaduzenle');
Route::post('arabaduzenlepost/{id}','ArabaController@arabaduzenlepost')->name('arabaduzenlepost');
Route::get('/arabasil/{id}', 'ArabaController@arabasil')->name('arabasil');
Route::get('iletisimliste','IletisimController@listele')->name('iletisimliste');
