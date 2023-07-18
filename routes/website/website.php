<?php

use App\Http\Controllers\website\CarController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;

//Return Home Page
Route::get('/home', [HomeController::class, 'index'])->name('front.home');
//Return Contact Page
Route::get('/contact-us', [ContactController::class, 'index'])->name('front.contact');
//Return Show Room Page
Route::get('/show-room', [CarController::class, 'show_room'])->name('front.show_room');
//Return Car Details page
Route::get('/car/{maker}/{model}/{year}/{slug}', [CarController::class, 'car_details'])->name('front.details');
//Route Get Models
Route::post('/get_models', [CarController::class, 'car_models'])->name('front.get_models');
//Route Search By Maker, Model
Route::get('/show-room/search', [CarController::class, 'car_search'])->name('front.car_search');
//Route Search By Logo
Route::get('/show-room/{maker}', [CarController::class, 'logo_search'])->name('front.logo_search');
//Under construction
Route::get('/under-construction', function () {
    return view('website.under-construction');
})->name('under_construction');
//team
Route::get('/our-team', function () {
    return view('website.our-team');
})->name('team');
//Contact us
Route::post('contact-us/send', [HomeController::class, 'contact_us_send'])->name('front.contact_us');
//test
Route::get('/', function () {
    return view('website.test');
});
//Export page
Route::get('/export', function () {
    return view('website.export');
})->name('front.export');
//Financing page
Route::get('financing', function () {
    return view('website.financing');
})->name('front.financing');
//Financing page
Route::get('urban', function () {
    return view('website.urban');
})->name('front.urban');
/////////////////////////////////////////////
Route::get('config', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');

    return 'success';
});

Route::get('route-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('route:cache');

    return 'success';
});

Route::get('migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');

    return 'success';
});
Route::get('optimize', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');

    return 'success';
});

Route::get('storage-link', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');

    return 'success';
});
