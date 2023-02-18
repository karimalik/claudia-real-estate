@extends('layouts.main')

@section('main-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
@endsection

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Liste Propriétés</h1>
        <a href="{{ route('propertie.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> &nbsp; Ajouter Une Propriété</a>
    </div>

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-list"></i> Liste Des Propriétés</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="width:100%" id="dataTable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Nombre De Pieces</th>
                            <th>Chambres</th>
                            <th>Ville</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($properties as $propertie)
                        <tr>
                            <td>{{ $propertie->name }}</td>
                            <td>{{ $propertie->number_pieces }}</td>
                            <td>{{ $propertie->beds }}</td>
                            <td>{{ $propertie->city }}</td>
                            <td>
                                <a href="{{ route('propertie.show', $propertie->id) }}"
                                    class="btn btn-warning btn-circle">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('propertie.edit',$propertie->id ) }}" class="btn btn-info btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle">
                                    <form action="{{ route('propertie.destroy', $propertie->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> <i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
     $('#dataTable').DataTable();
    });
</script>
@endsection
