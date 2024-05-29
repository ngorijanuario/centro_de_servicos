{{-- Condição para verificar se há uma pesquisa --}}
@if($search)
<div class="container">
     <div class="col-sm-12">
        <div class="section-title">
            <h2>Procurar serviço de : {{$search}}</p>
        </div>
    </div>
 </div>
@else

@endif
{{-- Estrutura de repetição paara buscar todos os dados dos serviços na base de dados. --}}
@foreach($servicos as $itens)
<div class="col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="/detalhes/{{ $itens -> id }}"><img src="/imgens/servicos/{{ $itens->imagem }}" style="width: 600px; height: 250px;" alt="{{ $itens -> NomeDoServiço }}"
                                        class="img-fluid"></a>
                                <div class="cart-icon">
                                    <a href="/detalhes/{{ $itens -> id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682" cy="0.714"
                                                        rx="0.682" ry="0.714" transform="translate(4.773 13.571)"
                                                        fill="none" stroke="#1a2224" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682" cy="0.714"
                                                        rx="0.682" ry="0.714" transform="translate(12.273 13.571)"
                                                        fill="none" stroke="#1a2224" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="/detalhes/{{ $itens -> id }}">{{ $itens -> NomeDoServiço }}</a>
                                <span>{{ $itens -> Valor }} Kz</span>
                            </div>
                        </div>
                    </div>

@endforeach
