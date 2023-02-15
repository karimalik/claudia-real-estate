@extends('layouts.main')

@section('main-content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informations</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-info"></i> Information de la categorie <strong class="text-uppercase">{{ $categorie->name }}</strong> </h6>
        </div>
        <div class="card-body">
            <form method="POST" action="#">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control " name="name" aria-describedby="emailHelp"
                        placeholder="Entrer le nom d'une categorie" value="{{ $categorie->name }}" readonly>
                </div>
                <a href="{{ route('categorie.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>
@endsection
