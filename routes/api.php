<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth:api']], function () {
    Route::get('user/detail', [UserController::class, 'detail']);
});
