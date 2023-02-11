<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
