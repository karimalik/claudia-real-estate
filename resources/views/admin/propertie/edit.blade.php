@extends('layouts.main')

@section('main-content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modification</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-home"></i> Modification De La Propriété
                <strong class="text-uppercase">{{ $propertie->name }}</strong>
            </h6>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('propertie.update', $propertie->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nom</label>
                        <input type="text" class="form-control" placeholder="" name="name" required
                            value="{{ $propertie->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nombre De Chambre</label>
                        <select id="inputState" class="form-control" name="beds" required>
                            <option value="{{ $propertie->beds }}" @selected(true)>{{ $propertie->beds }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="+10">+10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Salle De Bains</label>
                    <select id="inputState" class="form-control" name="baths" required>
                        <option value="{{ $propertie->baths }}" @selected(true)>{{ $propertie->baths }}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="+10">+10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Nombre De Pieces</label>
                    <select id="inputState" class="form-control" name="number_pieces" required>
                        <option value="{{ $propertie->number_pieces }}" @selected(true)>{{ $propertie->number_pieces }}
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="+10">+10</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Ville</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required
                            value="{{ $propertie->city }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Adresse</label>
                        <input type="text" class="form-control" id="inputCity" name="address" required
                            value="{{ $propertie->address }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputCity">Année De Construction</label>
                    <input type="text" class="form-control" id="inputCity" name="years" required
                        value="{{ $propertie->years }}">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Garage</label>
                        <select id="inputState" class="form-control" name="garage" required>
                            <option value="{{ $propertie->garage }}" @selected(true)>{{ $propertie->garage }}</option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Sous Sol</label>
                        <select id="inputState" class="form-control" name="basement" required>
                            <option value="{{ $propertie->basement }}" @selected(true)>{{ $propertie->basement }}
                            </option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Categorie</label>
                        <select name="categorie_id" id="" class="form-control" required>
                            <option value="{{ $propertie->categorie->id }}" @selected(true)>{{
                                $propertie->categorie->name
                                }}</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Prix</label>
                        <input type="text" class="form-control" id="inputCity" name="price" value="{{ $propertie->price }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Image</label> <br>
                        <img src="{{ asset('Properties/' . $propertie->image) }}" class="img-thumbnail"
                            alt="{{ $propertie->name }}" width="250px"> <br>
                        <input type="file" class="form-control" id="inputCity" name="image"
                            value="{{ $propertie->image }}" accept=".jpg, .png, .jpeg">
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="inputState">Gallerie</label>
                        <input type="file" class="form-control" id="inputCity" name="images[]" required
                            accept=".jpg, .png, .jpeg" multiple>
                    </div> --}}
                </div>

                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea name="description" class="form-control" id="" cols="20"
                        rows="7">{{ $propertie->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Modifier</button>
                <a href="{{ route('propertie.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>
@endsection