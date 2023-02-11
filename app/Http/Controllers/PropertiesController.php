<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * display the resource
     *
     * @return \Illuminate\response
     */
    public function index()
    {
        return view('pages.properties');
    }
}
