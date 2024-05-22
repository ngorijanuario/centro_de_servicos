@extends('componentes.main')

@section('title', 'CS | Inicio')

@section('content')
<!-- Populer Product Strat -->
<section class="populerproduct">
            <div class="container">
                <div class="row">
                
                    @include('componentes.servicos')
                    
                </div>
            </div>
        </section>
        <!-- Populer Product End -->
@endsection()
