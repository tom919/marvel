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

Route::get('/','PagesController@homepage');
Route::get('about','PagesController@about');
Route::get('siswa','SiswaController@index');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa','SiswaController@store');
Route::get('sampledata',function(){
  DB::table('siswa')->insert(
    [
      'nisn'=>'1002',
      'nama_siswa'=>'Dewi',
      'tanggal_lahir'=>'1986-02-15',
      'jenis_kelamin'=>'P',
      'created_at'=>'2016-03-10 19:00:00',
      'updated_at'=>'2016-03-10 19:00:00'
    ]
  );
});
