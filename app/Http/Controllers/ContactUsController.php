<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //

    public function contact_us_email(Request $request) {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required",
            "message" => "required|min:15"
        ]);

        $subject = "Message From Website.";
        $message = "You have a message from website:";
        $message .= "";

        // send email now
    }
}
