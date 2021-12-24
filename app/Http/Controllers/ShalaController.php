<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShalaController extends Controller
{
    
    private $_pages = [
        "dharmashala.html" => "dharmashala",
        "gaushala.html" => "gaushala",
        "pakshala.html" => "pakshala",
        "ayurvedashala.html" => "ayurvedashala", // file create gareko chaina ?
        'pathshala.html' => "pathshala",
    ];

    public function pages($page_name) {
        // now lets check 
        // if $page_name value is in the array list;
        if(array_key_exists(strtolower($page_name),$this->_pages)) {
            return view('shala.'.$this->_pages[$page_name]); // 
        }
        abort(404);
    }


}
