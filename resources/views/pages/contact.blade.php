@extends('layouts.app')

@section('title')
Claudia | Contact
@endsection

@section('content')
<div class="hero page-inner overlay" style="background-image: url('assets/images/hero_bg_2.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Contact</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="address mt-2">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">Location:</h4>
                        <p>
                            43 Raymouth Rd. Baltemoer,<br />
                            London 3910
                        </p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">Heure D'Ouverture:</h4>
                        <p>
                            Lundi-Vendredi:<br />
                            8:00 AM - 18:00 PM
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">Email:</h4>
                        <p>info@Untree.co</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">Telephone:</h4>
                        <p>+1 1234 55488 55</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <form action="#">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" placeholder="Nom" name="name" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Sujet" name="subject"/>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.contact-section -->
@endsection
