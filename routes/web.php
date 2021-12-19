<?php

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

Route::get('/', function () {
    return view("index");
});

Route::get('/shala/gaushala.html', function() {
    return view ("shala.gaushala");
});


Route::prefix("subscribe")
        ->name("subscribe.")
        ->group(function() {
            Route::post("/subscriber/new",[SubscriptionController::class,"store"])->name("add_new_subscription_list");
    });
