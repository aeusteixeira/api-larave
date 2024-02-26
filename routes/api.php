<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'users' => UserController::class,
    'addresses' => AddressController::class,
    'cities' => CityController::class,
    'states' => StateController::class,
]);
