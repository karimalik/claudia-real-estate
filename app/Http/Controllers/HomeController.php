<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Propertie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Contact::count();

        $properties = Propertie::count();

        $lists = Propertie::paginate(10);

        return view('home', compact(['messages', 'properties', 'lists']));
    }
}
