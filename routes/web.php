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
 #   return view('hello');
 
 });
 /*
Route::get('/users/{id}', function ($id) {
  return 'the user id is'.$id;

});
*/
/*
Route::get('/about',function(){
return view('pages.about');

});
*/
Route::get('/',  'PagesController@index');
Route::get('/about',  'PagesController@about');
Route::get('/services',  'PagesController@services');
Route::get('/login',  'PagesController@login');
Route::get('/register',  'PagesController@register');
Route::resource('posts','PostController');
Route::get('profile','Usercontroller@profile');
Route::post('profile','Usercontroller@update_profile'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
