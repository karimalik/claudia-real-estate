<?php

namespace App\Http\Controllers\Admin;

use App\Models\Propertie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class PropertieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Propertie::all();

        return view('admin.propertie.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('admin.propertie.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('Properties'), $newImageName);

        // $images = [];

        // foreach ($images as $image) {
        //     $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        //     $image_path = $image->move(public_path('Galleries'), $filename);

        //     array_push($images, $image_path);
        // }

        $data = [
            'name' => $request->name,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'city' => $request->city,
            'address' => $request->address,
            'number_pieces' => $request->number_pieces,
            'years' => $request->years,
            'description' => $request->description,
            'image' =>  $newImageName,
            'price' => $request->price,
            'basement' => $request->basement,
            'garage' => $request->garage,
            'foundation' => $request->foundation,
            'categorie_id' => $request->categorie_id,
        ];

        // dd($data);

        Propertie::create($data);

        return redirect()->route('propertie.index')->withSuccess('Your post was been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Propertie  $propertie
     * @return \Illuminate\Http\Response
     */
    public function show(Propertie $propertie)
    {
        $categories = Categorie::all();

        return view('admin.propertie.view', compact(['categories', 'propertie']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Propertie  $propertie
     * @return \Illuminate\Http\Response
     */
    public function edit(Propertie $propertie)
    {
        $categories = Categorie::all();

        return view('admin.propertie.edit', compact(['categories', 'propertie']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Propertie  $propertie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propertie $propertie)
    {
        $newImageName = time() . '-' . $request->marque . '.' . $request->image->extension();
        $request->image->move(public_path('Cars'), $newImageName);

        $data = [
            'name' => $request->name,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'city' => $request->city,
            'address' => $request->address,
            'number_pieces' => $request->number_pieces,
            'years' => $request->years,
            'description' => $request->description,
            'image' =>  $newImageName,
            'basement' => $request->basement,
            'garage' => $request->garage,
            'price' => $request->price,
            'foundation' => $request->foundation,
        ];

        $propertie->update($data);

        return back()->withSuccess('Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Propertie  $propertie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propertie $propertie)
    {
        $propertie->delete();

        return back()->withSuccess('Your post was deleted successfully!');
    }
}
