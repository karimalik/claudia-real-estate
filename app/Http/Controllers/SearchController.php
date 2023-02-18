<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {
        $search = DB::table('properties')
                  ->join('categories', 'porperties.id', '=', 'categories.id')
                  ->select('properties.*', 'categories.name')
                  ->paginate(10);

        return view('pages.result', compact('search'));
    }
}
