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

Route::prefix("shala")->name("shala.")
        ->group(function() {
            Route::get('gaushala.html', function() {
                return view ("shala.gaushala");
            })->name("gaushala");
            
            
            Route::get('dharmashala.html', function(){
                return view("shala.dharmashala");
            })->name("dharmashala");
            
            Route::get('pakshala.html', function(){
                return view("shala.pakshala");
            })->name('pakshala');
            
            Route::get('ayurvedashala.html', function(){
                return view("shala.ayurvedashala");
            })->name('pakshala');
            
            Route::get('pathshala.html', function(){
                return view("shala.pathshala");
            })->name("pathsahal");
});

Route::prefix("terms")->name('terms.')
    ->group(function(){
        Route::get("subscriber/privacy",function(){
            return view("terms.privacy");
        })->name('subscriber_privacy');
});


Route::prefix("subscribe")
        ->name("subscribe.")
        ->group(function() {
            Route::post("/subscriber/new",[SubscriptionController::class,"store"])->name("add_new_subscription_list");
    });
Route::prefix('contact')->name('contact.')
        ->group(function() {
            Route::get("contact-us",function() {
                return view('contactus');
            })->name('contact-us-form');    
            Route::post('/contact-us',[ContactUsController::class,"contact_us_email"])->name("send_contact_us_messge");
    });
