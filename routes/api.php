<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'namespace' => 'Api',
    'prefix' => '',
    'as' => 'api',
    'limit' => 300,
    'expires' => 5
], function () {
    Route::match(['get', 'post'], 'v1/create', 'QRGeneratorController@create');
    Route::match(['get', 'post'], 'v1/createNew', 'QRGeneratorController@createNew');
});
