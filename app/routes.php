<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$NS= 'App\\Controllers\\';

Route::get('/', 'App\\Controllers\\BootstrapController@home');
Route::get('/', 'App\\Controllers\\HomeController@showWelcome');

Route::get('/entry',$NS . 'EntryController@view');
Route::get('/entry/add',$NS . 'EntryController@add');
Route::post('/entry/add/proses',$NS . 'EntryController@addProses');
Route::get('/entry/edit/{id}',$NS . 'EntryController@edit');
Route::post('/entry/edit/proses',$NS . 'EntryController@editProses');
Route::get('/entry/delete/{id}',$NS . 'EntryController@delete');

Route::get('/penyewaan',$NS . 'PenyewaanController@view');
Route::get('/penyewaan/add',$NS . 'PenyewaanController@add');
Route::post('/penyewaan/add/proses',$NS . 'PenyewaanController@addProses');
Route::get('/penyewaan/edit/{id}',$NS . 'PenyewaanController@edit');
Route::post('/penyewaan/edit/proses',$NS . 'PenyewaanController@editProses');
Route::get('/penyewaan/delete/{id}',$NS . 'PenyewaanController@delete');

Route::get('/member',$NS . 'MemberController@view');
Route::get('/member/add',$NS . 'MemberController@add');
Route::post('/member/add/proses',$NS . 'MemberController@addProses');
Route::get('/member/edit/{id}',$NS . 'MemberController@edit');
Route::post('/member/edit/proses',$NS . 'MemberController@editProses');
Route::get('/member/delete/{id}',$NS . 'MemberController@delete');


