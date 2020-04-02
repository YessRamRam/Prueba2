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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Post */
Route::get ('/post/crear', 'PostController@create')->name('post.crear'); // a qui se estan creando los posts
Route::post('/post/guardar', 'PostController@store')->name('post.guardar');   //Guardado los posts que hace el usuario
Route::get ('/user-posts', 'PostController@index')->name('post.mostrar_todos'); // muestra todos los posts que hizo un usuario
Route::post('/post/eliminar', 'PostController@delete')->name('post.eliminar');
Route::get ('/post/{post_id}', 'PostController@show')->name('post.muestra');
Route::post('/post/actualizar','PostController@update')->name('post.actualizar');


