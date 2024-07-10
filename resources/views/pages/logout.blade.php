@extends('layouts.main')

@section('content')

    <section class="section register min-vh-100 d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('img/banniere.jpg') }}" alt="">
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Creez un compte</h5>
                                <p class="text-center small">Entrer vos informations pour creer un compte</p>
                            </div>

                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Votre nom</label>
                                    <input type="text" name="name" class="form-control" id="yourName" required>
                                </div>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Votre email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" name="username" class="form-control" id="yourUsername"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Secteur d'activité</label>
                                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">J'accepte les termes et conditions</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Creer un compte</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Etes-vous déjà un client ? <a href="{{ route('login') }}">Se connecter</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
