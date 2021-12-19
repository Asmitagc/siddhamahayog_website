<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
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
})->name('home');

Route::get('/shala/gaushala.html', function() {
    return view ("shala.gaushala");
});


Route::get('/shala/dharmashala.html', function(){
    return view("shala.dharmashala");
});

Route::get('/shala/pakshala.html', function(){
    return view("shala.pakshala");
});

Route::get('/shala/ayurvedashala.html', function(){
    return view("shala.ayurvedashala");
});

Route::get('/shala/pathshala.html', function(){
    return view("shala.pathshala");
});

Route::get('/contactus', function(){
    return view("asdf");
});







Route::prefix("subscribe")
        ->name("subscribe.")
        ->group(function() {
            Route::post("/subscriber/new",[SubscriptionController::class,"store"])->name("add_new_subscription_list");
    });
Route::prefix('contact')->name('contact.')
        ->group(function() {
            Route::post('/send_message',[ContactUsController::class,"contact_us_email"])->name("send_contact_us_messge");
    });
