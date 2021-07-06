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

Route::get('/', 'App\Http\Controllers\front\Post@home');

Route::get('/post/{id}', 'App\Http\Controllers\front\Post@post');

Route::view('/admin/login', 'admin/login');
Route::view('/contact', 'front/contact');
// Route::view('/post', 'front/post');
Route::view('/about', 'front/about');
Route::post('/admin/login_submit', 'App\Http\Controllers\Admin_auth@login_submit');

Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    return redirect('admin/login');
});

Route::group(['middleware'=>['admin_auth']],function ()
{
    Route::get('/admin/post/list', 'App\Http\Controllers\admin\Post@listing');
    Route::view('/admin/post_edit', 'admin/post_edit');
    Route::view('/admin/post/add', 'admin/post/add');
    Route::post('/admin/post/submit', 'App\Http\Controllers\admin\Post@submit');
    Route::get('/admin/post/delete/{id}', 'App\Http\Controllers\admin\Post@delete');
    Route::get('/admin/post/edit/{id}', 'App\Http\Controllers\admin\Post@edit');
    Route::post('/admin/post/update/{id}', 'App\Http\Controllers\admin\Post@update');

    Route::get('/admin/page/list', 'App\Http\Controllers\admin\page@listing');
    Route::view('/admin/page_edit', 'admin/page_edit');
    Route::view('/admin/page/add', 'admin/page/add');
    Route::post('/admin/page/submit', 'App\Http\Controllers\admin\page@submit');
    Route::get('/admin/page/delete/{id}', 'App\Http\Controllers\admin\page@delete');
    Route::get('/admin/page/edit/{id}', 'App\Http\Controllers\admin\page@edit');
    Route::post('/admin/page/update/{id}', 'App\Http\Controllers\admin\page@update');

    Route::get('/admin/contact/list', 'App\Http\Controllers\admin\contact@list');

});


