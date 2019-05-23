<?php
//Route::get('/', 'AppController@index')->name('home');
Route::get('/{any}', 'AppController@index')->where('any', '.*');