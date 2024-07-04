@extends('layouts.main')

@section('content')

<div class="container-fluid mb-5 shadow" style="background: rgb(243, 242, 242); border: 1px solid rgb(243, 242, 242)">
    <div class="container">
        <div class="d-flex justify-content-between p-2">
            <h4>Qui sommes-nous ?</h4>
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
    
@endsection