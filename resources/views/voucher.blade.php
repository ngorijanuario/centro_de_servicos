@extends('componentes.main')

@section('title', 'CS | Voucher')

@section('content')

<section class="banner-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="banner-area__content">
                            <h2>Cartão</h2>
                            <p>Gere seus cartãos</p>
                            <p>Saldo disponivel: <b>300.000 Kz</b></p>
                            <a class="btn bg-primary" href="#">Adicionar Cartão</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="banner-area__img">
                            <img src="dist/images/cartao.png" alt="banner-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection()