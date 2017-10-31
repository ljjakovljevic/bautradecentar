<?php

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get(trans('routes.home'), 'HomeController@index')->name('home');
