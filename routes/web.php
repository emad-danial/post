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
/*
Route::get('/', function () {
    return view('templet.home');
    //return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
*/
Route::get('/homei','TempletContrroller@index');

Route::get('/','TempletContrroller@index');

Route::post('/add','TempletContrroller@insert');

Route::get('/error',function (){
    return "errrrrroooooor";
});


Route::get('/about','TempletContrroller@about');
Route::get('/emad','TempletContrroller@indexxx');
Route::get('/simble','TempletContrroller@simble');
Route::get('/contact','TempletContrroller@contact')->middleware('auth');

Route::get('/delete/{id}','TempletContrroller@delete')->middleware('auth');

Route::get('/edit/{id}','TempletContrroller@edit')->middleware('auth');
Route::post('/update/{id}','TempletContrroller@update');
/*
Route::get('/about','AboutController@about');
Route::get('/contact','ContactController@contact');
Route::get('/member','CrudController@select');
Route::get('/addmember','CrudController@addmember');
Route::post('/add','CrudController@insert');
Route::get('/delete/{id}','CrudController@delete');
Route::get('/edit/{id}','CrudController@edit');
Route::post('/update/{id}','CrudController@update');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
