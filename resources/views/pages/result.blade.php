@extends('layouts.app')

@section('title')
Claudia | Properties
@endsection

@section('content')

<div class="hero page-inner overlay" style="background-image: url('assets/images/hero_bg_3.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Propriétés</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Propriétés
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!--Properties-->
<div class="section section-properties">
    <div class="container">
        @if (request()->input())
        <h5>{{ $properties->total() }} resultat(s) pour la recherche {{ request()->q }}</h5>
        @endif
        <div class="row mt-4">
            @foreach ($properties as $propertie)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="#" class="img">
                        <img src="{{ asset('Properties/' . $propertie->image) }}" alt="Image" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>${{ $propertie->price }}</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">{{ $propertie->address }}</span>
                            <span class="city d-block mb-3">{{ $propertie->city }}</span>

                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">{{ $propertie->beds }}</span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">{{ $propertie->baths }}</span>
                                </span>
                            </div>

                            <a href="#" class="btn btn-primary py-2 px-3">Voir Plus</a>
                        </div>
                    </div>
                </div>
                <!-- .item -->
            </div>
            @endforeach
        </div>
        <p class="custom-pagination">{{ $properties->links() }}</p>
    </div>
</div>
<!-- .Properties-->

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
