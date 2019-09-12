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



/*Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>hello world!</h1>";
});

Route::get('/users/{id}/{name}', function($id, $name)
{
    return 'This is user ' . $id . ' with name of '. $name;
});
*/
Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/maps', 'MapsController@index');
Route::resource('comment', 'CommentController',['only'=>['update','destroy']]);
Route::post('comment/create/{post}','PostsController@storecomment')->name('postcomment.store');
Route::get('/testmaps', function()
{
    return view('testmaps');
});