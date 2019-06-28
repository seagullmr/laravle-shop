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

// 未验证邮箱的用户尝试访问一个配置了 verified 中间件的路由，Laravel 就会提示该用户邮箱未激活
Route::get('/', 'PagesController@root')->name('root')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 启用与邮箱验证相关的路由（验证邮箱页面、重发验证邮件页面等）
Auth::routes(['verify' => true]);