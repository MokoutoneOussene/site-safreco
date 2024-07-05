@extends('layouts.main')

@section('content')

    @include('layouts.scrollbar')

    @include('require.partenaire')

    <section id="domaines" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h4>Choisissez Un plan d'hébergement pour votre domaine</h4>
            </div>

            <div class="row gy-4">
                <div class="col-xl-3 col-md-12 p-2">
                    <article class="text-center" style="border-radius: 100%;">
                        <p>Lite HEBERGEMENT</p>
                        <h4>A partir de <br> 3 000 FCFA /an</h4>
                        <p>Hébergement adapté aux petits hébergements et aux e-mails.</p>
                        <hr>
                        <a href="">Voir plus</a>
                    </article>
                </div>
                <div class="col-xl-3 col-md-12 p-2">
                    <article class="text-light text-center d-flex justify-content-center align-item-center bg-dark" style="border-radius: 100%; flex-direction: column">
                        <p>Main HEBERGEMENT</p>
                        <h4>A partir de <br> 22.000 FCFA/An</h4>
                        <p>Ce plan convient aux petites et grandes entreprises.</p>
                        <hr>
                        <a href="" class="text-light">Voir plus</a>
                    </article>
                </div>
                <div class="col-xl-3 col-md-12 p-2">
                    <article class="text-center d-flex justify-content-center align-item-center" style="border-radius: 100%; flex-direction: column">
                        <p>Reseller HEBERGEMENT</p>
                        <h4>A partir de <br> 69.000 FCFA/An</h4>
                        <p>Ce plan convient aux petites et grandes entreprises.</p>
                        <hr>
                        <a href="">Voir plus</a>
                    </article>
                </div>
                <div class="col-xl-3 col-md-12 p-2">
                    <article class="bg-info text-center d-flex justify-content-center align-item-center" style="border-radius: 100%; flex-direction: column">
                        <p>VPS HEBERGEMENT</p>
                        <h4>A partir de <br> 316.000 FCFA/An</h4>
                        <p>Ce plan convient aux petites et grandes entreprises.</p>
                        <hr>
                        <a href="">Voir plus</a>
                    </article>
                </div>
            </div>

            <div class="mt-4">
                <a href="#" class="readmore stretched-link">Voir plus <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>

    </section><!-- End Recent Blog Posts Section -->

    <div class="container-fluid" style="background: rgb(28, 27, 27)">
        <div class="container d-flex justify-content-center align-item-center" style="height: 25vh; flex-direction: column;">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <h4 class="text-light">Nous fournissons toutes sortes d'hébergement convenable pour tous!</h4>
                </div>
                <div class="col-xl-4 col-md-12">
                    <button class="btn btn-light w-100">Choisissez celle qui vous convient !</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-xl-6 col-md-12">
                <h4>Pourquoi les services d'hébergement Web?</h4>
                <p>
                    Un service d'hébergement Web est un type de service d'hébergement Internet qui permet aux individus et aux 
                    organisations de rendre leur site accessible via le World Wide Web . Les Hébergeurs Web sont des sociétés qui 
                    fournissent l'espace sur un serveur pour une utilisation par les clients , ainsi que la connectivité Internet , 
                    généralement dans un centre de données . 
                </p>
                <p>
                    Les hébergeurs Web peuvent également offrir un espace de centre de données et la connectivité à l' Internet pour 
                    d'autres serveurs situés dans leur centre de données , appelés colocation , aussi connu comme le logement en Amérique 
                    latine ou en France. La portée des services d'hébergement Web varie considérablement . Le plus fondamental est la page web 
                    et hébergement de fichiers à petite échelle , où les fichiers peuvent être téléchargés via le protocole de transfert de 
                    fichiers ( FTP ) ou une interface Web .
                </p>
                <a href="">Voir plus</a>
            </div>
            <div class="col-xl-6 col-md-12">
                <h4>Un nom de domaine et son but</h4>
                <p>
                    Un nom de domaine est une chaîne d'identification qui définit un domaine de l'autonomie administrative , l'autorité ou le 
                    contrôle de l' Internet . Les noms de domaine sont formés par les règles et procédures du système des noms de domaine (DNS ) . 
                    Le nom enregistré dans le DNS est un nom de domaine . Les noms de domaine sont utilisés dans différents contextes de mise en 
                    réseau et de dénomination et destinées à des fins spécifiques à l'application . En général, un nom de domaine représente un (IP) 
                    Protocole Internet ressource, comme un ordinateur personnel utilisé pour accéder à Internet , un ordinateur serveur hébergeant un 
                    site Web , ou le site lui-même ou tout autre service transmis par l'intermédiaire de l' Internet . Les noms de domaine sont 
                    organisés en niveaux subalternes ( sous-domaines ) du domaine racine du DNS , qui n'a pas de nom . 
                </p>
                <a href="">Voir plus</a>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5" style="background: rgb(237, 235, 235)">
        <div class="container p-5">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="info-box">
                        <i class="ion-ios-chatboxes size-64"></i>
                        <div class="info-content">
                            <h4 class="info-title"><a href="#">Avez-vous besoin de booster votre business?</a>
                            </h4>
                            <div class="info-detail">Nous vous aidons à renforcer les actions de nos
                                clients en améliorant leur façon de travailler. Nous fournissons
                                les outils necessaires à améliorer leur fonctionnement et leur
                                performances.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="info-box">
                        <i class="ion-person-stalker size-64"></i>
                        <div class="info-content">
                            <h4 class="info-title"><a href="#">Rejoignez notre équipe. Êtes-vous
                                    prêt à changer la donne ?</a></h4>
                            <div class="info-detail">Êtes-vous prêt à passer un cap? L'époque du
                                travail de bureau banal est révolue. La passion vient de
                                l'intérieur, et nous sommes prêts à créer un espace formidable pour
                                nos partenaires.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
