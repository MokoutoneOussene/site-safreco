@extends('layouts.main')

@section('content')
    <div class="container-fluid mb-5 shadow" style="background: rgb(243, 242, 242); border: 1px solid rgb(243, 242, 242)">
        <div class="container">
            <div class="d-flex justify-content-between p-2">
                <h4>Decouvrez notre expertise</h4>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">expertises</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; align-items: center">
        <h4>Notre Expertise</h4>
        <p>
            <span class="fw-bolder">Conseil & Accompagnement - </span> Nous sommes des experts en stratégie digitale. Notre équipe vous accompagne dans la définition de votre vision digitale et la mise en place de solutions adaptées à vos besoins.
        </p>
        <p>
            <span class="fw-bolder">Développement Web - </span> Nous maîtrisons les CMS tels que WordPress, PrestaShop et Drupal. Que ce soit pour la création, la refonte ou la migration de votre site web, nous sommes là pour vous.
        </p>
        <p>
            <span class="fw-bolder">Web Design & UX-UI Design - </span> Nos graphistes créent des designs modernes et ergonomiques. Nous concevons également des e-mailings percutants et des pages de destination attractives.
        </p>
        <p>
            <span class="fw-bolder">Référencement SEO & SEA - </span> Boostez votre visibilité en ligne grâce à nos stratégies de référencement sur mesure. Nous gérons également vos campagnes publicitaires sur les moteurs de recherche.
        </p>
        <p>
            <span class="fw-bolder">Web Analytics & Tag Management - </span> Analysez vos données avec précision. Nous configurons des outils d’analyse web et utilisons un gestionnaire de balises pour optimiser vos performances.
        </p>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/conseil_etude.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">ETUDE, CONSEIL ET FORMATION</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/dev_apps.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">DÉVELOPPEMENTS ET SOLUTIONS D’APPLICATION</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/insta_reseaux.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">INSTALLATION RÉSEAU ET INFRASTRUCTURE</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/Cloud.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">LICENCES ET SERVICES CLOUD</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/digitalisation.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">DIGITALISATION DE VOTRE ENTREPRISE</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/prog_automobile.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">PROGRAMMATION AUTOMOBILE</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/Reseaux.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">INSTALLATION ET CONFIGURATION MAC ET WINDOWS</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/dev_apps.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">VENTES DES NOMS DE DOMAINES ET DES ESPACES DE D’HÉBERGEMENT</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img src="{{ asset('assets/img/expertise/ordinateur-portable.jpg') }}" class="card-img-top" alt="..." style="height: 220px;">
                    <div class="card-body">
                        <h5 class="card-title text-lowercase">VENTE DES SERVEURS ET ORDINATEUR MAC</h5>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
