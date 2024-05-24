@extends('componentes.main')

@section('title', 'CS | Inicio')

@section('content')
{{-- Estrutura da pagina index --}}
<section class="populerproduct">
            <div class="container">
                <div class="row">
                
                    @include('componentes.servicos')
                    
                </div>
            </div>
        </section>
        <!-- Populer Product End -->
@endsection()
