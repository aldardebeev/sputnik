<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use Orion\Facades\Orion;





Orion::resource('/users',UserController::class);

Route::group(['as' => 'api.'], function() {
    Orion::resource('/destinations', DestinationController::class);



});


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('add-destination', [UserController::class, 'addDestination']);
    Route::get('get-user-destinations', [UserController::class, 'getUserDestinations']);

});
