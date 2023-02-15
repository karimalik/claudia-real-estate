@extends('layouts.main')

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> &nbsp; Ajouter Une Propriété</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nombres De Propriétés</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $properties }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <!-- Pending Requests Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Message</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $messages }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-list"></i> Liste Des Propriétés</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Nombre De Piéces</th>
                            <th>Salle De Bains</th>
                            <th>Chambres</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($lists as $list)
                            <tr>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->number_pieces }}</td>
                                <td>{{ $list->beds }}</td>
                                <td>{{ $list->baths }}</td>
                                <td>{{ $list->address }}</td>
                                <td>{{ $list->city }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <a href="" class="btn btn-secondary">Voir Plus</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
