@extends('layouts.main')

@section('main-content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modification</h1>
    </div>

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-pen"></i> Modification de la categorie
                <strong class="text-uppercase">{{ $categorie->name }}</strong>
            </h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('categorie.update', $categorie->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control " name="name" aria-describedby=""
                        placeholder="Entrer le nom d'une categorie" value="{{ $categorie->name }}" required>
                </div>
                <button type="submit" class="btn btn-success">Valider</button>
                <a href="{{ route('categorie.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>
@endsection
