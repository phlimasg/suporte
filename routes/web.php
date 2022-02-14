<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);








/*

Route::get('/', function () {
    return view('welcome');
});
Route::get('/raphael', function () {
    return view('raphael');
});
Route::get('/create_user', [UserController::class, 'create']
);
Route::post('/save_user', 
    [CreateUserController::class, 'save']
);
*/