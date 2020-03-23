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
Route::group(['middleware'=>['web']],function (){

    Route::get('/','PageController@Home');

    Route::get('/about','PageController@About');

    Route::get('/members','PageController@Members');

    Route::post('/members/save','PageController@SaveMember');

    Route::get('/members/{id}','PageController@Showinfo');

    Route::post('/members/{id}/notes','NotesController@SaveNote');

    Route::get('notes/{note}/edit','NotesController@Edit');

    Route::post('notes/{note}/update','NotesController@Editupdate');
});
