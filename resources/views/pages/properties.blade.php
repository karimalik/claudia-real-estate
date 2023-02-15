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

<!-- Featured Properties -->
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Propriétés En Vedette
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        <div class="property-item">
                            <a href="#" class="img">
                                <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="#" class="btn btn-primary py-2 px-3">details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="#" class="img">
                                <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="#" class="btn btn-primary py-2 px-3">details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="#" class="img">
                                <img src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="#" class="btn btn-primary py-2 px-3">details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="#" class="img">
                                <img src="{{ asset('assets/images/img_4.jpg') }}" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="#" class="btn btn-primary py-2 px-3">details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Featured Properties -->

<!--Properties-->
<div class="section section-properties">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="#" class="img">
                        <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>$1,291,000</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                            <span class="city d-block mb-3">California, USA</span>

                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">2 beds</span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">2 baths</span>
                                </span>
                            </div>

                            <a href="#" class="btn btn-primary py-2 px-3">details</a>
                        </div>
                    </div>
                </div>
                <!-- .item -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="#" class="img">
                        <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>$1,291,000</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                            <span class="city d-block mb-3">California, USA</span>

                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">2 beds</span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">2 baths</span>
                                </span>
                            </div>

                            <a href="#" class="btn btn-primary py-2 px-3">details</a>
                        </div>
                    </div>
                </div>
                <!-- .item -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="#" class="img">
                        <img src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid" />
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>$1,291,000</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                            <span class="city d-block mb-3">California, USA</span>

                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">2 beds</span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">2 baths</span>
                                </span>
                            </div>

                            <a href="#" class="btn btn-primary py-2 px-3">details</a>
                        </div>
                    </div>
                </div>
                <!-- .item -->
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-lg-3">Pagination (1 of 10)</div>
            <div class="col-lg-6 text-center">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div>
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
