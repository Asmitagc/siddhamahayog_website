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
        $message .= "<br />";
        $message .= "<strong><em>Person Detail</em></strong>";
        $message .= "<br />";
        $message .= "<strong>Name:</strong> ". $request->name;
        $message .= "<br />";
        $message .= "<strong>Email:</strong> ". $request->email;
        $message .= "<br />";
        $message .= "<strong>Phone:</strong> ". $request->phone;
        $message .= "<br />";
        $message .= "<strong>Message:</strong> ". $request->message;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // // More headers
        $headers .= 'From: <noreply@siddhamahayog.org>' . "\r\n";
        mail("unknownrocks619@gmail.com",'Contact Us Message',$message,$headers);
        
        if ($request->ajax()) {
            return response([
                "success" => true,
                'message' => "Thank-you, Our team will get in touch with you as soon as possible."
            ]);
        }

        $request->session()->message("success","Thank-you", "Our Team will get in touch with you as soon as possible.");
        return back();
    }
}
