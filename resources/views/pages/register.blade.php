@extends('layouts.main')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

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

                            <form class="row g-3 needs-validation" action="{{ route('gestion_utilisateur.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <input type="text" name="role" class="form-control" value="client" hidden>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Nom complet</label>
                                        <input type="text" name="nom" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Téléphone *</label>
                                        <input type="text" name="telephone" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Société *</label>
                                        <input type="text" name="societe" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Secteur d'activité</label>
                                        <input type="text" name="activite" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">E-mail *</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" name="adresse" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Code postal</label>
                                        <input type="text" name="code_postal" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Pays</label>
                                        <input type="text" name="pays" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Ville</label>
                                        <input type="text" name="ville" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">J'accepte les termes et conditions</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn w-100 bg-primary text-light" type="submit">Creer un compte</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Etes-vous déjà un client ? <a href="{{ route('connexion') }}">Se connecter</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
