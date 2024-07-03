<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:cemcafbf@gmail.com">info@safreco.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+226 61 34 65 54</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="border-bottom: 2px solid black; display: block; background-color: #0f4371;">
    <div class="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navbarSupportedContent" style="background-color: #0f4371;">
            <div class="col-md-8">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <h6>ACCUEIL</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="{{ route('domaines') }}">
                            <h6>NOM DE DOMAINES</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="#">
                            <h6>EXPERTISE</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="#">
                            <h6>REALISATION</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="#">
                            <h6>QUI SOMMES-NOUS ?</h6>
                        </a>
                    </li>
                    <li class="d-flex">
                        <a class="navbar-brand" href="#">
                            <h6>COMTACTS</h6>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="{{asset('img/logo.jpg')}}" alt="logo safreco">
            </div>
        </div>
    </div>
</nav>
