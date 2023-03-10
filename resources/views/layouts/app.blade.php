<!-- /*
* Email: karimkompissi@gmail.com
* Author: karim kompissi
* URI: https://webixcm.com/
*/ -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="karim kompissi" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>
        @yield('title')
    </title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{ url('/') }}" class="logo m-0 float-start">
                        <img src="{{ asset('assets/images/logo1.png') }}" width="120%" height="40px" alt="">
                    </a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="{{ Request::path() == 'propriete' ? 'active' : '' }}">
                            <a href="{{ route('properties.index') }}">Propri??t??s</a>
                        </li>
                        <li class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                            <a href="{{ url('about-us') }}">A Propos</a>
                        </li>
                        <li class="{{ Request::path() == 'contact' ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}">Contact</a>
                        </li>
                    </ul>

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- content -->
    @yield('content')

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>259 boulevard saint joseph, bureau 104, <br> Gatineau, Qc j8y 1t6</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://819-921-7380">819-921-7380</a></li>
                            {{-- <li><a href="tel://11234567890">+1(123)-456-7890</a></li> --}}
                            <li>
                                <a href="mailto:claudia.o.kaldjob@kw.com">claudia.o.kaldjob@kw.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Site Map</h3>
                        <ul class="list-unstyled float-start links">
                            <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="{{ Request::path() == 'propriete' ? 'active' : '' }}">
                                <a href="{{ route('properties.index') }}">Propri??t??s</a>
                            </li>
                            <li class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                                <a href="{{ url('about-us') }}">A Propos</a>
                            </li>
                            <li class="{{ Request::path() == 'contact' ? 'active' : '' }}">
                                <a href="{{ route('contact.index') }}">Contact</a>
                            </li>

                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li>
                                <a href="#">Ma Mission</a>
                            </li>
                            <li>
                                <a href="#">Ma Vision</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Liens</h3>
                        <ul class="list-unstyled links">
                            <li>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hypothequeModal">Calculatrice
                                    Hypoth??caire</a>
                            </li>
                            <li>
                                <a href="#">Calculatrice De La Taxe De Mutation</a>
                            </li>
                            <li>
                                <a href="#">Evaluation Immobili??re</a>
                            </li>
                        </ul>

                        <ul class="list-unstyled social">
                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- Modal -->
            <div class="modal fade" id="hypothequeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="exampleModalLabel"> <strong
                                    class="text-uppercase">Calculatrice
                                    Hypoth??caire</strong> </h5>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-8 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="" class="text-black">Montant De L'Hypoth??que ($):</label> <br>
                                            <input type="text" class="form-control" placeholder="0,00" name=""
                                                id="montant-hypotheque" />
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="text-black">Taux D'Int??r??t Annuel (%):</label> <br>
                                            <input type="text" class="form-control" placeholder="0,00" name=""
                                                id="taux" />
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="text-black">Amortissement (Ann??es) :</label> <br>
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
                                            <input type="text" class="form-control" placeholder="0,00 $" name=""
                                                id="montant-annuel" @disabled(true) />
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

            <div class="row mt-5">
                <div class="col-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        . All Rights Reserved. &mdash; Designed by
                        <a href="https://webixcm.com">Webix</a>

                    </p>

                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
