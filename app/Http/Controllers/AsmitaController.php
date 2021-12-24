<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class AsmitaController extends Controller {

    public function submit_my_form(Request $request) {
        $request->validate([
            "email" => "required|email",
            "name" => "required",
            "phone" => "required|size:10|integer",
            "message" => "required|min:10"
        ]);

        $asmita_model = new ContactUs;
        $asmita_model->name = $request->name;
        $asmita_model->email = $request->email;
        $asmita_model->phone_number = $request->phone;
        $asmita_model->message = $request->message;

        $asmita_model->save();
// success
// message
        $request->session()->flash('success',"Thank-you for your response. Ranjan will contact you soon.");
        return back();

    }

}