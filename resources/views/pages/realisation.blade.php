@extends('layouts.main')

@section('content')
    <div class="container-fluid mb-5 shadow" style="background: rgb(243, 242, 242); border: 1px solid rgb(243, 242, 242)">
        <div class="container">
            <div class="d-flex justify-content-between p-2">
                <h4 style="color: #0f4371;">Decouvrez nos réalisations</h4>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">réalisations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; align-items: center">
        <h4 style="color: #0f4371;">Nos réalisations</h4>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">SAFRECO GESTION-STOCK</h5>
                        <p class="card-text">
                            Logiciel de Gestion électronique du courrier entrant, sortant et interne IKA COURRIER, votre 
                            Gestionnaire Électronique des Correspondances papier et électronique est une solution complète de la 
                            gestion et de l’organisation de l’information administrative.
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/saf-courrier.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">SAFRECO GESTION-STAGE</h5>
                        <p class="card-text">
                            Une solution de collaboration en entreprise clé en main pour les PME/PMI, IKA PORTAL, votre solution 
                            de collaboration au tour des documentaires et information avec possibilité d’automatisation de tout 
                            processus est une solution complète de la collaboration...
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/saf-portail.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">SAFRECO MOTOR POOL</h5>
                        <p class="card-text">
                            IKA VISITE est une plateforme de gestion de sécurité permettant de gérer le flux d’entré sortie dans 
                            les locaux ou installations de toute structure. C’est une application simple de gestion des entrées et 
                            sorties dans tout type de structure public ou privé...
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/saf-visite.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection
