@extends('layouts.main')

@section('main-content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Information</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-home"></i> Fiche D'Information De La
                Propriété <strong class="text-uppercase">{{ $propertie->name }}</strong></h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('propertie.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nom</label>
                        <input type="text" class="form-control" placeholder="" name="name" readonly
                            value="{{ $propertie->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nombre De Chambre</label>
                        <input type="text" class="form-control" placeholder="" readonly value="{{ $propertie->beds }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Salle De Bains</label>
                    <input type="text" class="form-control" placeholder="" readonly value="{{ $propertie->baths }}">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Nombre De Pieces</label>
                    <input type="text" class="form-control" placeholder="" readonly
                        value="{{ $propertie->number_pieces }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Ville</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required
                            value="{{ $propertie->city }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Adresse</label>
                        <input type="text" class="form-control" id="inputCity" name="address" required
                            value="{{ $propertie->address }}" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputCity">Année De Construction</label>
                    <input type="text" class="form-control" id="inputCity" name="years" required
                        value="{{ $propertie->years }}" readonly>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Garage</label>
                        <input type="text" class="form-control" placeholder="" readonly value="{{ $propertie->garage }}"
                            readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Sous Sol</label>
                        <input type="text" class="form-control" placeholder="" readonly
                            value="{{ $propertie->basement }}" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Categorie</label>
                        <input type="text" class="form-control" placeholder="" value="{{ $propertie->categorie->name }}"
                            readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Prix</label>
                        <input type="text" class="form-control" id="inputCity" name="price" value="{{ $propertie->price }}" readonly>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputCity">Image</label> <br>
                    <img src="{{ asset('Properties/' . $propertie->image) }}" class="img-thumbnail"
                        alt="{{ $propertie->name }}" width="250px">
                </div>
                {{-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Image</label>
                        <input type="file" class="form-control" id="inputCity" name="image" required
                            accept=".jpg, .png, .jpeg">
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="inputState">Gallerie</label>
                        <input type="file" class="form-control" id="inputCity" name="images[]" required
                            accept=".jpg, .png, .jpeg" multiple>
                    </div>
                </div> --}}

                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea name="description" class="form-control" id="" cols="20" rows="7"
                        readonly>{{ $propertie->description }}</textarea>
                </div>

                <a href="{{ route('propertie.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>
@endsection