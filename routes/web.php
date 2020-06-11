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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::get('/admin/newtag', function () {
    return view('admin/newtag');
})->name('newtag');

Route::get('/admin/updatetag/{id}', 'SqlController@updatetag')->name('updatetag');

Route::post('/admin/updatetag-submit/{id}', 'SqlController@updatetagsubmit')->name('unpdatetag-submit');

Route::get('/admin/taglist', function () {
    return view('admin/taglist');
})->name('taglist');

Route::get('/admin/newproject', function () {
    return view('admin/newproject');
})->name('newproject');

Route::get('/admin/tagremove/{id}', 'SqlController@tagremove')->name('tagremove');

Route::post('/admin/newtag/submit', 'SqlController@newtag')->name('newtag-submit');

Route::post('/submit', 'FormController@submit')->name('form');

Route::post('admin/newprojectupload', 'SqlController@newprojectupload')->name('newprojectupload');