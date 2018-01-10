<?php

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');


//注册
Route::get('signup','UsersController@create')->name('signup');
//用户操作相关
Route::resource('users','UsersController');

//显示登录页面
Route::get('login','SessionController@create')->name('login');
//创建新会话（登录）
Route::post('login','SessionController@store')->name('login');
//销毁会话（退出登录）
Route::delete('logout','SessionController@destroy')->name('logout');

