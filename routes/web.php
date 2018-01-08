<?php

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

//注册
Route::get('signup','UsersController@create')->name('signup');

//用户操作相关
Route::resource('users','UsersController');
