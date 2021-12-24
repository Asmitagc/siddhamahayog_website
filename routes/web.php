<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ShalaController;
use App\Http\Controllers\AsmitaController;
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

/**
 * we trimed our five different route to single one. 
 */
Route::prefix("shala")->name("shala.")
        ->group(function() {
            Route::get('{page?}',[ShalaController::class,'pages'])->name('shala_pages');
});

Route::prefix("activities")->name("activities.")
        ->group(function() {
            Route::get('{page?}',[ActivitiesController::class,'pages'])->name('activities_pages');
});

Route::prefix("activities")->name("activities.")
        ->group(function() {
            Route::get('farming.html', function() {
                return view ("activities.farming");
            })->name("farming"); 

            Route::get('paddy_processing.html', function() {
                return view ("activities.paddy_processing");
            })->name("paddy_processing"); 
        });

      
            




Route::post('/submit-form',[AsmitaController::class,"submit_my_form"])->name('submit_form');












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
