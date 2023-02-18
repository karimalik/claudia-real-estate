<?php

namespace App\Http\Controllers;

use App\Models\Propertie;
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
        $properties = Propertie::paginate(6);

        return view('pages.propriete', compact('properties'));
    }

    public function show(Propertie $propertie)
    {
        return view('pages.more', compact('propertie'));
    }

    public function search()
    {
        $q = request()->input('q');

        $properties = Propertie::where('city', 'like', "%$q%")
                            ->orwhere('address', 'like', "%$q%")
                            ->paginate(6);

        return view('pages.result', compact('properties'));
    }
}
