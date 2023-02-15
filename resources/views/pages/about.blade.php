@extends('layouts.app')

@section('title')
Claudi | a Propos
@endsection

@section('content')
<div class="hero page-inner overlay" style="background-image: url('assets/images/cd2.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">A Propos</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            A Propos
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4">A Propos De Moi</h2>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="img-about dots">
                    <img src="{{ asset('assets/images/cd1.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <div class="feature-text">
                        <h3 class="heading">LA MEILLEURE DES PUBLICITÉS EST UN CLIENT <strong>SATISFAIT</strong></h3>
                        <p class="text-black-50">
                            Avec 9 ans d'expériences en service à la clientèle (la vente) et 4 ans en gestion des
                            ressources humaines, J'ai développé une passion pour le contact avec le public et
                            l'entregent.
                            Dans mes divers emplois, J'ai eu à promouvoir des activités pour atteindre des objectifs,
                            des tâches administratives, planifier et organiser, déterminer le besoin de mes clients en
                            répondant à leurs questions. Tout pour dire que la satisfaction
                            de mes clients est très importante pour moi, en ayant également des aptitudes pour la
                            résolution des problèmes.
                        </p>

                        <p class="text-black-50">
                            Le compliment qui revenait le plus est le suivant :
                            -As-tu déjà pensé à l’immobilier ?
                            Me voici 4 ans plus tard dans l’immobilier, car dans la vie c’est important de faire ce qui
                            nous passionne.
                        </p>

                        <p class="text-black-50">
                            Il est très important pour moi de bien informer un client afin que son choix soit clair et
                            réfléchi dont le souci du détail y va de soi.
                            Je suis une personne très déterminée, dynamique, disciplinée et proactive à trouver des
                            solutions.
                            En ayant aussi en ma possession plusieurs outils nécessaire et la visibilité majeure afin
                            que mes clients aient une tranquillité d'esprit.

                            Laissez-moi influencer les décisions les plus importantes a prendre dans votre vie !
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
