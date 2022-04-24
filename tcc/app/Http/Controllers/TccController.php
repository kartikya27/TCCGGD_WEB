<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class TccController extends Controller
{
    public function index(){
       return view('home');
    }
    public function showClients(){
       return view('clientsPage');
    }
    public function showServices(){
       return view('service');
    }
    public function sendContactMail(Request $req){
      $this->validate($req,[
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'g-recaptcha-response'=>function($attribute,$value,$fail){
           $secretKey = config('services.recaptcha.secret');
           $response = $value;
           $userIP = $_SERVER['REMOTE_ADDR'];
           $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
           $response = \file_get_contents($url);
           $response = json_decode($response);
           if(!$response->success){
               Session::flash('g-recaptcha-response','Please Check reCaptcha');
               Session::flash('alert-class','alert-danger');
               $fail($attribute.'Google reCaptcha faild');
           }
       },
      ]);
      $data = array(
         'name' => $req->name,
         'email' => $req->email,
         'phone' => $req->phone,
         'subject' => $req->subject,
         'message' => $req->message
      );
      Mail::to('kartikey@tccggd.com')->send(new ContactMail($data));
      return back()->with('success','Thanks for contacting us!');
   }

}
