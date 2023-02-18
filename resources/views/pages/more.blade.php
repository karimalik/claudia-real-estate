@extends('layouts.app')

@section('title')
Claudia | Propertie
@endsection

@section('content')
<div class="hero page-inner overlay" style="background-image: url({{ asset('Properties/' . $propertie->image) }})">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">
                    {{ $propertie->address }}
                </h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('properties.index') }}">Properties</a>
                        </li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ $propertie->address }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <img src="{{ asset('Properties/' . $propertie->image) }}" alt="Image" class="img-fluid" />
                        <img src="{{ asset('Properties/' . $propertie->image) }}" alt="Image" class="img-fluid" />
                        <img src="{{ asset('Properties/' . $propertie->image) }}" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">{{ $propertie->name }}, {{ $propertie->categorie->name }}</h2>
                <h3>$ {{ $propertie->price }}</h3>
                <p class="meta">{{ $propertie->city }}, <br> {{ $propertie->address }}</p>
                <p class="text-black-50">{{ $propertie->description }}</p>

                <h5>Caracteristiques</h5>
                <p>
                <ul>
                    <li><span class="icon-bed me-2"></span> {{ $propertie->beds }} Chambre(s) à coucher</li> <br>
                    <li><span class="icon-bath me-2"></span> {{ $propertie->baths }} Salle(s) de bains</li> <br>
                    <li><span class="icon-home me-2"></span> Sous-Sol: {{ $propertie->basement }}</li> <br>
                    <li><span class="icon-car me-2"></span>Garage: {{ $propertie->garage }}</li> <br>
                    <li><span class="icon-sort-numeric-asc me-2"></span>Nombre De Pieces: {{ $propertie->number_pieces
                        }}</li> <br>
                    <li><span class="icon-calendar me-2"></span>Année De Construction: {{ $propertie->years }}</li>
                </ul>
                <p class="text-balck-50 fs-4">Besoin de plus d'infos</p> <a href="{{ route('contact.index') }}"
                class="btn btn-primary">contactez-nous</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4">Faites Votre Calcul Hypothécaire</h2>
            <p>
                <a href="#" class="btn btn-primary text-white py-3 px-4" data-bs-toggle="modal"
                    data-bs-target="#hypothequeModal">Calculatrice Hypothécaire</a>
            </p>
        </div>
        <!-- /.col-lg-7 -->
    </div>
    <!-- /.row -->
</div>


<!-- Modal -->
<div class="modal fade" id="hypothequeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel"> <strong class="text-uppercase">Calculatrice
                        Hypothécaire</strong> </h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <div class="col-lg-8 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <form action="#">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="" class="text-black">Montant De L'Hypothèque ($):</label> <br>
                                <input type="text" class="form-control" placeholder="0,00" name=""
                                    id="montant-hypotheque" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="text-black">Taux D'Intérêt Annuel (%):</label> <br>
                                <input type="text" class="form-control" placeholder="0,00" name="" id="taux" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="text-black">Amortissement (Années) :</label> <br>
                                <select class="form-control" name="" id="amortissement">
                                    <option value="5" @selected(true)>5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <label for="" class="text-black">Versement Annuels ($):</label> <br>
                                <input type="text" class="form-control" placeholder="0,00 $" name=""
                                    id="versement-annuel" @disabled(true) />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="text-black">Montant Annuels ($):</label> <br>
                                <input type="text" class="form-control" placeholder="0,00 $" name="" id="montant-annuel"
                                    @disabled(true) />
                            </div>

                            <div class="col-12">
                                <button type="button" class="btn btn-primary">Calculer Le Montant De Mes
                                    Versements <i class="fa fa-calculator"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
