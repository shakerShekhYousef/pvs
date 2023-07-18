<?php

use App\Http\Controllers\dashboard\CarController;
use App\Http\Controllers\dashboard\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'dashboard'], function () {
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //cars routes
    Route::get('cars', [CarController::class, 'index'])->name('cars.index');
});

//Admin routes
Route::group(
    [
        'prefix' => 'dashboard',
        'roles' => ['Admin'],
    ], function () {
        //Users routes
        Route::resource('users', UserController::class)->except('index');
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::post('users_delete', [UserController::class, 'delete_user'])->name('users_delete');
        //Cars routes
        Route::resource('cars', CarController::class)->except('index');
        Route::post('cars_delete', [CarController::class, 'delete_car'])->name('cars_delete');
        Route::post('delete_car_images', [CarController::class, 'delete_car_image'])->name('delete_car_image');
    });
