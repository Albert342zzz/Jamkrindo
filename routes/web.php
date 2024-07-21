<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lob', 'App\Http\Controllers\LobController');

Route::put('lob/{id}', 'App\Http\Controllers\LobController@update');
Route::get('/lob/{id}/delete', 'App\Http\Controllers\LobController@destroy')->name('lob.destroy');
Route::get('/lob-integrate', 'App\Http\Controllers\LobController@integration');

Route::get('/log', 'App\Http\Controllers\ActivityLogController@index');

Route::get('integration', 'App\Http\Controllers\IntegrationController@index');
Route::get('integration/{id}', 'App\Http\Controllers\IntegrationController@show');
Route::post('integration', 'App\Http\Controllers\IntegrationController@store');
Route::put('integration/{id}', 'App\Http\Controllers\IntegrationController@update');
Route::delete('integration/{id}', 'App\Http\Controllers\IntegrationController@destroy');
Route::get('/token', function () {
    return csrf_token();
});
