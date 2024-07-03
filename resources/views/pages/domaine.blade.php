@extends('layouts.main')

@section('content')
    <div class="container-fluid mb-5 shadow" style="background: rgb(243, 242, 242); border: 1px solid rgb(243, 242, 242)">
        <div class="container">
            <div class="d-flex justify-content-between p-2">
                <h4>Rechercher un nom de domaines</h4>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nom de domaine</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- <h3 class="section-title">Domain pricing </h3> -->
        <h3 class="section-title">Prix des Domaines </h3>

        <div class="pricing-table">
            <div class="row">

                <div class="col-md-12">

                    <table class="table table-bordered table-striped table-comparision table-responsive">
                        <thead>
                            <tr>
                                <th>TLD</th>
                                <th class="text-center">Années Min.</th>
                                <th class="text-center">Enregistrer</th>
                                <th class="text-center">Transférer</th>
                                <th class="text-center">Renouveler</th>
                                <th class="text-center">Min. de caractère</th>
                                <th class="text-center">Max. de caractère premium</th>
                                <th class="text-center">Enregistrer premium</th>
                                <th class="text-center">Renouveler premium</th>
                                <th class="text-center">Transférer premium</th>
                                <th class="text-center">Restauration</th>
                                <th class="text-center">Changer les NS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-2">com</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">53000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">net</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">53000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">org</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">9000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">53000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">online</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">5500 FCFA</td>
                                <td class="col-md-2">18000 FCFA</td>
                                <td class="col-md-2">18000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">61200 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">site</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">5500 FCFA</td>
                                <td class="col-md-2">18000 FCFA</td>
                                <td class="col-md-2">5500 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">61200 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">website</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">5500 FCFA</td>
                                <td class="col-md-2">18000 FCFA</td>
                                <td class="col-md-2">18000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">61200 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">20000 FCFA</td>
                                <td class="col-md-2">20000 FCFA</td>
                                <td class="col-md-2">20000 FCFA</td>
                                <td class="col-md-2">3</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">info</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">9500 FCFA</td>
                                <td class="col-md-2">9500 FCFA</td>
                                <td class="col-md-2">9500 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">1 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">5300 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">tv</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">24000 FCFA</td>
                                <td class="col-md-2">24000 FCFA</td>
                                <td class="col-md-2">24000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">1 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">53000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">tech</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">2400 FCFA</td>
                                <td class="col-md-2">2400 FCFA</td>
                                <td class="col-md-2">2400 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">1 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">64800 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">africa</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">4550 FCFA</td>
                                <td class="col-md-2">4550 FCFA</td>
                                <td class="col-md-2">4550 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">52000 FCFA</td>
                                <td class="col-md-2">4550 FCFA</td>
                                <td class="col-md-2">52000 FCFA</td>
                                <td class="col-md-2">30000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">com.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">org.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">net.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">10000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">edu.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">univ.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">5000 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">perso.bf</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2">2500 FCFA</td>
                                <td class="col-md-2">2500 FCFA</td>
                                <td class="col-md-2">2500 FCFA</td>
                                <td class="col-md-2">1</td>
                                <td class="col-md-2"></td>
                                <td class="col-md-2">2 FCFA</td>
                                <td class="col-md-2">3 FCFA</td>
                                <td class="col-md-2">80000 FCFA</td>
                                <td class="col-md-2">2500 FCFA</td>
                                <td class="col-md-2">0 FCFA</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
