<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center">
                <a href="mailto:cemcafbf@gmail.com">info@safreco.com</a>
            </i> <span>|</span> <span>Besoin d'aide ? Parlez à un expert au</span>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+226 25 47 48 58</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

<nav class="navbar navbar-expand-md navbar-light shadow-sm"
    style="border-bottom: 2px solid black; display: block; background-color: #0f4371;">
    <div class="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navbarSupportedContent" style="background-color: #0f4371;">
            <div class="col-md-8">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <h6>Accueil</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('domaines') }}">
                            <h6>Nom de domaine</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('expertise') }}">
                            <h6>Expertise</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('realisation') }}">
                            <h6>Réalisation</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('safreco') }}">
                            <h6>Qui sommes-nous ?</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="#">
                            <h6>Contact</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="">
                            <h6>Mon compte</h6>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/logo.jpg') }}" alt="logo safreco">
            </div>
        </div>
    </div>
</nav>
