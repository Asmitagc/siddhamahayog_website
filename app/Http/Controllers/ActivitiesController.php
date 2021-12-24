<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    
    private $_pages = [
        "aarati.html" => "aarati",
        "akhanda_kreetan.html" => "akhanda_kreetan",
        "farming.html" => "farmin",
        "paddy_processing.html" => "paddy_processing", 
        'vedanta_darsan.html' => "vedanta_darsan",
    ];

    public function pages($page_name) {
        // now lets check 
        // if $page_name value is in the array list;
        if(array_key_exists(strtolower($page_name),$this->_pages)) {
            return view('activities.'.$this->_pages[$page_name]); // 
        }
        abort(404);
    }


}
