@extends('componentes.main')

@section('title', 'CS | Carrinho')

@section('content')
{{-- Estrutura do carrinho --}}
<section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Dashboard-Nav  Start-->
                    <div class="dashboard-nav">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="active">Meu carrinho</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard-Nav  End-->
                </div>
            </div>
            <div class="rows">
                <div class="cart-items">
                    <div class="header">
                        <div class="image">
                            Imagem
                        </div>
                        <div class="name">
                            Serviço
                        </div>
                        <div class="price">
                            Preço
                        </div>
                        <div class="rating">
                            Avaliação
                        </div>
                    </div>
                    <div class="body">
                        <div class="item">
                            <div class="image">
                                <img src="dist/images/taxista.jpg">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Taxista</p>
                                </div>
                            </div>
                            <div class="price">
                                <span>50.000</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                        </div>
                       
                        <div class="item">
                            <div class="image">
                                <img src="dist/images/canalizador.jpg">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Canalizador</p>
                                </div>
                            </div>
                            <div class="price">
                                <span>15.000</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <img src="dist/images/quanto-ganha-advogado.png">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Advogada</p>
                                </div>
                            </div>
                            <div class="price">
                                <span>80.000</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                <div class="col-lg-6">
                    <div class="card-price">
                        <h6>Lista de compras</h6>
                        <div class="card-price-list d-flex justify-content-between align-items-center">
                            <div class="item">
                                <p>3 item</p>
                            </div>
                            <div class="price">
                                <p>145.000</p>
                            </div>
                        </div>
                        <div class="card-price-list d-flex justify-content-between align-items-center">
                            <div class="item">
                                <p>Desconto</p>
                            </div>
                            <div class="price">
                                <p>8%</p>
                            </div>
                        </div>
                        <div class="card-price-list d-flex justify-content-between align-items-center">
                            <div class="item">
                                <p>IVA</p>
                            </div>
                            <div class="price">
                                <p>0</p>
                            </div>
                        </div>
                        <div class="card-price-subtotal d-flex justify-content-between align-items-center">
                            <div class="total-text">
                                <p>Total</p>
                            </div>
                            <div class="total-price">
                                <p>133.400</p>
                            </div>

                        </div>
                        <form action="#">
                            <a href="billing-information.html" class="btn bg-primary" type="submit" style="width: 100%;">Fazer pedido.</a>
                        </form>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection()