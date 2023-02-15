<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * display the resource
     *
     * @return \Illuminate\Response
     */

     public function index()
     {
        return view('pages.contact');
     }

     /**
      * store message and send directly message after this
      *
      * @param \Illuminate\Http\Request $request
      *
      * @return \App\Models\Contact
      */
     public function sendMessage(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $message = Contact::create($data);

        if($message)
        {
            Mail::to('admin@admin.com')->send(new ContactMail($data));
        }

        return back()->withSuccess('Your message has been successfuly send!');
     }
}
