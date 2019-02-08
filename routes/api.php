<?php
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/themes', 'HomeController@getAllThemes');
Route::get('/edit/{id}', 'EditController@getVariables');
