@extends('layouts.main')

@section('content')
    <div class="container-fluid mb-5 shadow" style="background: rgb(243, 242, 242); border: 1px solid rgb(243, 242, 242)">
        <div class="container">
            <div class="d-flex justify-content-between p-2">
                <h4 style="color: #0f4371;">Qui sommes-nous ?</h4>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Qui sommes-nous ?</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center" style="color: #0f4371;">SAFRECO votre partenaire au services du numérique</h4>
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center" style="align-items: center">
                <p>
                    Créée en 2022 au BURKINA FASO, SAFRECO est spécialisée dans les Traveaux d’installations des projets
                    informatiques
                    métiers, de réalisation d’études et de conseils. Composée des développeurs, chefs de projet, architectes
                    et experts,
                    c’est une équipe 100% technique qui vous accompagne dans vos projets de transformation numérique. Avec
                    pour
                    moteur la rigueur et la qualité de services. Nous représentons plusieurs structure africaine et
                    européenne.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <img src="{{ asset('img/banniere.jpg') }}" alt="logo" style="width: 650px;">
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5" style="background: rgb(101, 101, 103)">
        <div class="container d-flex justify-content-center align-item-center"
            style="height: 25vh; flex-direction: column;">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <h4 class="text-light">Avez-vous besoin de booster votre business?</h4>
                </div>
                <div class="col-xl-6 col-md-12">
                    <h4 class="text-light">Rejoignez notre équipe. Êtes-vous prêt à changer la donne ?</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="display: flex; flex-direction: column; justify-content: center; align-items: center">
        <h4 style="color: #0f4371;">Nos services</h4>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">AUDIT & ETUDES</h5>
                        <p class="card-text">
                            Audit des systèmes d’informations - Elaboration d’un schéma directeur - Conseils en stratégies
                            et digitalisation... </p>
                    </div>
                    <img src="{{ asset('assets/img/expertise/audit.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">RESEAUX ET INFRASTRUCTURES</h5>
                        <p class="card-text">
                            Les interconnexions des sites de travail - Segmentation et configurations réseaux - Sécurité
                            réseaux...
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/expertise/Reseaux.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">DEVELOPPEMENT ET SOLUTIONS</h5>
                        <p class="card-text">
                            Développement d’application mobiles - Développement d’application WEB - Développement
                            d’application de paiements...
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/expertise/developpement.jpg') }}" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
    </div>

    @include('require.partenaire')

    <section id="contact" class="contact mt-5 mb-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h4 style="color: #0f4371;">Laisser nous un message !</h4>
                <p>Vous avez des questions et nous avons des réponses. Contactez-nous dès aujourd’hui, nous sommes là pour vous aider</p>
            </div>

            <div class="row gx-lg-0 gy-4">
                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="background: #0f4371;">
                        <div class="info-item d-flex" style="background: #266dab;">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Localisation :</h4>
                                <p>Wemtenga Rue 29.60 , Ouagadougou Burkina Faso</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" style="background: #266dab;">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email :</h4>
                                <p>infos@safreco.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" style="background: #266dab;">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Téléphone :</h4>
                                <p>+226 03 82 05 05</p>
                                <p>+226 25 47 48 58</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" style="background: #266dab;">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Heure d'ouverture:</h4>
                                <p>Lundi-Samedi: 08h - 17h</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Votre email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Votre message ici ..." required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer le message</button></div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
