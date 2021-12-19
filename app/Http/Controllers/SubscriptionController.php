<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    //

    public function store(Request $request) {

        $request->validate([
            "email" =>"email|required"
        ]);

        $check_duplicate = Subscription::where('email',$request->email)->first();

        if ($check_duplicate && $check_duplicate->subscribed) {
            if ( $request->ajax() ) {
                return response([
                    "success" => false,
                    "message" => "You have already subscribed us."
                ]);
            }

        } elseif($check_duplicate && ! $check_duplicate->subscribed) {
            if($this->resubscribe($check_duplicate) ) {
                if( $request->ajax() ) {
                    return response([
                        "success" => true,
                        "message" => "Thank-you for your subscription."
                    ]);
                }

                $request->session()->flash('success',"Thank-you for your subscription.");
                return back()->withInput();

            } else {
                if($request->ajax() ) {
                    return response([
                        "success" => false,
                        "message" => "Oops ! Sorry we couldn't save your email at the moment. Please try again."
                    ]);
                }
                $request->session()->flash('message',"Oops ! Sorry we couldn't save your email at the moment. Please try again.");
                return back()->withInput();
            }
        }

        $subscription = new Subscription;
        $subscription->email = $request->email;

        try {
            $subscription->save();
        } catch (\Throwable $th) {
            //throw $th;
            if ( $request->ajax() ) {
                return response([
                    "success" => false,
                    "message" => "Oops ! Sorry we couldn't save your email at the moment. Please try again."
                ]);
            }
            $request->session()->flash("message","Oops ! Sorry we couldn't save your email at the moment. Please try again.");
            return back()->withInput();
        }

        if ($request->ajax()){
            return response([
                "success" => true,
                "message" => "Thank-you for your subscription."
            ]);
        }
        $request->session()->flash("success","Thank-you for your subscription.");
        return back()->withInput();
    }

    public function unsubscribe(Request $request) {
        $request->validate([
            "email" => "required|email|exists:subscriptions,email"
        ]);

        $subscription = Subscription::where('email',$request->email)->first();

        try {
            $subscription->save();
        } catch (\Throwable $th) {
            //throw $th;
            $request->session()->flash("message","Error ! Please try again with correct information.");
            return back()->withInput();
        }

        $request->session()->flash('success',"Your email has been removed from subscription list.");
        return back()->withInput();
    }

    private function resubscribe(Subscription $subscription) {
        $subscription->subscribed = true;

        try {
            $subscription->save();

        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }
}
