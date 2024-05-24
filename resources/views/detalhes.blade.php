@extends('componentes.main')

@section('title', 'CS | Detalhes')

@section('content')
{{-- Estrutura da pagina detalhes --}}
<section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="product-slider">
                            <div>
                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        <li><img src="/dist/images/{{ $servico->imgem }}" alt="{{ $servico->NomeDoServiço }}" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="product-pricelist">
                            <h2>{{ $servico->NomeDoServiço }}</h2>
                            <hr>
                            <p>Profissonal: <b>{{ $servico->Fornecedor }}</b></p>
                            <p>Contacto: <b>{{ $servico->contecto }}</b></p>
                            <hr>
                            <div class="product-pricelist-ratting">
                                
                                <div class="price">
                                    <span>{{ $servico->Valor }} Kz</span>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li>5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <p>{{ $servico->Descricao }}</p>
                            <br>
                            <div class="product-pricelist-selector-button">
                                <a class="btn cart-bg " href="#">Adicionar ao Carrinho
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection()