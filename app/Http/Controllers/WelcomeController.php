<?php

namespace App\Http\Controllers;

use App\Models\Propertie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $properties = Propertie::paginate(6);

        return view('welcome', compact('properties'));
    }
}
