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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game','search@get_list');
Route::get('/game/{id}','search@get_game_detail');
Route::get('/link/{id}','link@put_me_in');
Route::get('/comment/{id}','comment@shut_up');
Route::get('/chinese/{id}','chinese@resource_list');

Route::get('/search', function () {
    return view('advance_welcome');
});
Route::get('/games','yellowcontroller@get_list');
Route::get('/games/{id}','detail@get_game_detail');
Route::get('/games/{id}/edit','detail@edit_chinese');
Route::post('/games/{id}','detail@send_chinese');

Route::get('/games/{id}/resources', 'detail@check_resources');
Route::post('/games/{id}/confirm', 'detail@confirm_resources');