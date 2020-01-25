<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Mail;


class ContactController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }
        $contact = DB::table('user_info')->get();
        $data = array(
            'address' => $contact[0]->address_line1 . ', ' . $contact[0]->address_line2,
            'phone' => $contact[0]->personal_number,
            'whatsapp' => $contact[0]->whatsapp_number,
            'skype' => $contact[0]->skype,
            'email' => $contact[0]->email_id,
            'website' => $contact[0]->website
        );
        return view('contact', $data);
    }

    function sendmail(Request $request){
        $data = array('name'=>$request->input('name'),
                'emailContact'=>$request->input('emailContact'),
                'phone'=>$request->input('phone'),
                'msg'=>$request->input('msg'));
        
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('rajath.muthappakallich@mavs.uta.edu', 'Portfolio')->subject
            ('Contact Me.!');
         $message->from('laravelprojectwdm@gmail.com','Protfolio Email');
      });

      return view('mailconfirmation');
    }
}
