<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('itcontest');
});
Route::resource('/tahap1', 'Tahap1Controller');   
Route::get('/tahap1-soal1',['as'=>'tahap1.soal1','uses'=>'Tahap1Controller@soal1']);
Route::post('/tahap1-soal1',['as'=>'tahap1.store1','uses'=>'Tahap1Controller@store1']);
Route::get('/tahap1-soal2',['as'=>'tahap1.soal2','uses'=>'Tahap1Controller@soal2']);
Route::post('/tahap1-soal2',['as'=>'tahap1.store2','uses'=>'Tahap1Controller@store2']);
Route::get('/tahap1-soal3',['as'=>'tahap1.soal3','uses'=>'Tahap1Controller@soal3']);
Route::post('/tahap1-soal3',['as'=>'tahap1.store3','uses'=>'Tahap1Controller@store3']);
Route::get('/tahap1-soal4',['as'=>'tahap1.soal4','uses'=>'Tahap1Controller@soal4']);
Route::post('/tahap1-soal4',['as'=>'tahap1.store4','uses'=>'Tahap1Controller@store4']);
Route::get('/tahap1-soal5',['as'=>'tahap1.soal5','uses'=>'Tahap1Controller@soal5']);
Route::post('/tahap1-soal5',['as'=>'tahap1.store5','uses'=>'Tahap1Controller@store5']);
Route::get('/tahap1-soal6',['as'=>'tahap1.soal6','uses'=>'Tahap1Controller@soal6']);
Route::post('/tahap1-soal6',['as'=>'tahap1.store6','uses'=>'Tahap1Controller@store6']);
Route::get('/tahap1-soal7',['as'=>'tahap1.soal7','uses'=>'Tahap1Controller@soal7']);
Route::post('/tahap1-soal7',['as'=>'tahap1.store7','uses'=>'Tahap1Controller@store7']);
Route::get('/tahap1-soal8',['as'=>'tahap1.soal8','uses'=>'Tahap1Controller@soal8']);
Route::post('/tahap1-soal8',['as'=>'tahap1.store8','uses'=>'Tahap1Controller@store8']);
Route::get('/tahap1-soal9',['as'=>'tahap1.soal9','uses'=>'Tahap1Controller@soal9']);
Route::post('/tahap1-soal9',['as'=>'tahap1.store9','uses'=>'Tahap1Controller@store9']);
Route::get('/tahap1-soal10',['as'=>'tahap1.soal10','uses'=>'Tahap1Controller@soal10']);
Route::post('/tahap1-soal10',['as'=>'tahap1.store10','uses'=>'Tahap1Controller@store10']);
Route::get('/tahap1-hasil',['as'=>'tahap1.hasil','uses'=>'Tahap1Controller@hasil']);

Route::get('/tahap2',['as'=>'tahap2.index','uses'=>'Tahap2Controller@index']);
Route::post('/tahap2',['as'=>'tahap2.store','uses'=>'Tahap2Controller@store']);
Route::get('/tahap2-soal1',['as'=>'tahap2.soal1','uses'=>'Tahap2Controller@soal1']);
Route::post('/tahap2-soal1',['as'=>'tahap2.store1','uses'=>'Tahap2Controller@store1']);
Route::get('/tahap2-soal2',['as'=>'tahap2.soal2','uses'=>'Tahap2Controller@soal2']);
Route::post('/tahap2-soal2',['as'=>'tahap2.store2','uses'=>'Tahap2Controller@store2']);
Route::get('/tahap2-soal3',['as'=>'tahap2.soal3','uses'=>'Tahap2Controller@soal3']);
Route::post('/tahap2-soal3',['as'=>'tahap2.store3','uses'=>'Tahap2Controller@store3']);
Route::get('/tahap2-soal4',['as'=>'tahap2.soal4','uses'=>'Tahap2Controller@soal4']);
Route::post('/tahap2-soal4',['as'=>'tahap2.store4','uses'=>'Tahap2Controller@store4']);
Route::get('/tahap2-soal5',['as'=>'tahap2.soal5','uses'=>'Tahap2Controller@soal5']);
Route::post('/tahap2-soal5',['as'=>'tahap2.store5','uses'=>'Tahap2Controller@store5']);
Route::get('/tahap2-soal6',['as'=>'tahap2.soal6','uses'=>'Tahap2Controller@soal6']);
Route::post('/tahap2-soal6',['as'=>'tahap2.store6','uses'=>'Tahap2Controller@store6']);
Route::get('/tahap2-soal7',['as'=>'tahap2.soal7','uses'=>'Tahap2Controller@soal7']);
Route::post('/tahap2-soal7',['as'=>'tahap2.store7','uses'=>'Tahap2Controller@store7']);
Route::get('/tahap2-soal8',['as'=>'tahap2.soal8','uses'=>'Tahap2Controller@soal8']);
Route::post('/tahap2-soal8',['as'=>'tahap2.store8','uses'=>'Tahap2Controller@store8']);
Route::get('/tahap2-soal9',['as'=>'tahap2.soal9','uses'=>'Tahap2Controller@soal9']);
Route::post('/tahap2-soal9',['as'=>'tahap2.store9','uses'=>'Tahap2Controller@store9']);
Route::get('/tahap2-soal10',['as'=>'tahap2.soal10','uses'=>'Tahap2Controller@soal10']);
Route::post('/tahap2-soal10',['as'=>'tahap2.store10','uses'=>'Tahap2Controller@store10']);
Route::get('/tahap2-hasil',['as'=>'tahap2.hasil','uses'=>'Tahap2Controller@hasil']);

Route::get('/tahap3',['as'=>'tahap3.index','uses'=>'Tahap3Controller@index']);
Route::post('/tahap3',['as'=>'tahap3.store','uses'=>'Tahap3Controller@store']);
Route::get('/tahap3-soal1',['as'=>'tahap3.soal1','uses'=>'Tahap3Controller@soal1']);
Route::post('/tahap3-soal1',['as'=>'tahap3.store1','uses'=>'Tahap3Controller@store1']);
Route::get('/tahap3-soal2',['as'=>'tahap3.soal2','uses'=>'Tahap3Controller@soal2']);
Route::post('/tahap3-soal2',['as'=>'tahap3.store2','uses'=>'Tahap3Controller@store2']);
Route::get('/tahap3-soal3',['as'=>'tahap3.soal3','uses'=>'Tahap3Controller@soal3']);
Route::post('/tahap3-soal3',['as'=>'tahap3.store3','uses'=>'Tahap3Controller@store3']);
Route::get('/tahap3-soal4',['as'=>'tahap3.soal4','uses'=>'Tahap3Controller@soal4']);
Route::post('/tahap3-soal4',['as'=>'tahap3.store4','uses'=>'Tahap3Controller@store4']);
Route::get('/tahap3-soal5',['as'=>'tahap3.soal5','uses'=>'Tahap3Controller@soal5']);
Route::post('/tahap3-soal5',['as'=>'tahap3.store5','uses'=>'Tahap3Controller@store5']);
Route::get('/tahap3-hasil',['as'=>'tahap3.hasil','uses'=>'Tahap3Controller@hasil']);

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();
