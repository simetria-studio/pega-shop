@extends('layouts.main')

@section('title', 'ABCJPêga')

@section('content')
    <div class="banner-principal">
        <div><a href="#"><img src="{{ asset('img/banner1.png') }}" class="img-fluid"></a></div>
        <div><a href="#"><img src="{{ asset('img/banner1.png') }}" class="img-fluid"></a></div>
        <div><a href="#"><img src="{{ asset('img/banner1.png') }}" class="img-fluid"></a></div>
        {{-- <div class="">
            <img src="{{ asset('img/frame1.png') }}" width="332px" height="453px" class="img-fluid" alt="">
        </div>
        <div class="">
            <h3 class="text-center text-light">Confira nossos destaques!</h3>
            <img src="{{ asset('img/frame2.png') }}" class="img-fluid mb-3" alt="">
            <div class="text-center">
                <a href="" type="button" class="btn btn-custom">Ver Produtos</a>
            </div>

        </div> --}}
    </div>
    <div class="container">
        <div class="row justify-content-md-center text-md-center align-items-center  ">
            <div class="col-md-3 mb-3 border-md-end border-md-2">
                <div class="d-flex  align-items-center ">
                    <iconify-icon class="text-custom mx-1" icon="bx:lock" width="70" height="70"></iconify-icon>
                    <p>Compre online com qualidade e segurança</p>
                </div>
            </div>
            <div class="col-md-3 mb-3 border-md-end border-md-2">
                <div class="d-flex  align-items-center ">
                    <iconify-icon class="text-custom mx-1" icon="clarity:truck-line" width="70" height="70">
                    </iconify-icon>
                    <p>Envio para todo Brasil</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="d-flex  align-items-center ">
                    <iconify-icon class="text-custom mx-1" icon="game-icons:brazil" width="70" height="70">
                    </iconify-icon>
                    <p>Maior associação de criadores de asininos pêga do Brasil</p>
                </div>
            </div>
        </div>
    </div>
    <div class="promocoes p-2">
        <div class="container">
            <div class="text-center">
                <h3 class="text-light">Promoções</h3>
            </div>
            <div class="carousel p-3">
                <div class="promo-produto mb-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199431/samples/ecommerce/shoes.png">
                    <h3>Produto 1</h3>
                    <p>Descrição do produto 1.</p>
                    <div class="preco">R$ 99,99</div>
                    <div class="off">
                        25% OFF
                    </div>
                    <div class="avaliacao mb-3">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                    </div>
                    <div class="botoes">
                        <input type="number" value="1" min="1" max="10" class="quantidade ">
                        <a href="{{ url('produto') }}" class="btn btn-custom">Comprar</a>
                    </div>
                </div>
                <div class="promo-produto mb-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199452/cld-sample-5.jpg">
                    <h3>Produto 1</h3>
                    <p>Descrição do produto 2.</p>
                    <div class="preco">R$ 99,99</div>
                    <div class="off">
                        25% OFF
                    </div>
                    <div class="avaliacao mb-3">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                    </div>
                    <div class="botoes">
                        <input type="number" value="1" min="1" max="10" class="quantidade">
                        <a href="{{ url('produto') }}" class="btn btn-custom comprar">Comprar</a>
                    </div>
                </div>
                <div class="promo-produto mb-3">
                    <img class="img-fluid"
                        src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199427/samples/ecommerce/analog-classic.jpg">
                    <h3>Produto 1</h3>
                    <p>Descrição do produto 4.</p>
                    <div class="preco">R$ 99,99</div>
                    <div class="off">
                        25% OFF
                    </div>
                    <div class="avaliacao mb-3">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                    </div>
                    <div class="botoes">
                        <input type="number" value="1" min="1" max="10" class="quantidade">
                        <a href="{{ url('produto') }}" class="btn btn-custom comprar">Comprar</a>
                    </div>
                </div>
                <div class="promo-produto mb-3">
                    <img
                        src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg">
                    <h3>Produto 1</h3>
                    <p>Descrição do produto 4.</p>
                    <div class="preco">R$ 99,99</div>
                    <div class="off">
                        25% OFF
                    </div>
                    <div class="avaliacao mb-3">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                    </div>
                    <div class="botoes">
                        <input type="number" value="1" min="1" max="10" class="quantidade">
                        <a href="{{ url('produto') }}" class="btn btn-custom comprar">Comprar</a>
                    </div>
                </div>
                <div class="promo-produto mb-3">
                    <img src="">
                    <h3>Produto 1</h3>
                    <p>Descrição do produto 4.</p>
                    <div class="preco">R$ 99,99</div>
                    <div class="off">
                        25% OFF
                    </div>
                    <div class="avaliacao mb-3">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                    </div>
                    <div class="botoes">
                        <input type="number" value="1" min="1" max="10" class="quantidade">
                        <a href="{{ url('produto') }}" class="btn btn-custom comprar">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="produtos mb-3 p-2">
        <div class="container">
            <div class="text-center my-5">
                <h3 class="text-light">Todos os nossos <br>produtos:</h3>
            </div>
            <div class="products">
                <ul class="product-card-container">
                    <li class="product-card bg-dark mb-3">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199431/samples/ecommerce/shoes.png"
                            class="img-fluid">
                        <h3>Produto 1</h3>
                        <p>Descrição do produto 4.</p>
                        <div class="preco">R$ 99,99</div>
                        <div class="avaliacao mb-3">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-o"></span>
                        </div>
                        <div class="botoes">
                            <input type="number" value="1" min="1" max="10" class="quantidade">
                            <a href="{{ url('produto') }}" class="btn btn-custom">Comprar</a>
                        </div>
                    </li>
                    <li class="product-card bg-dark mb-3">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199452/cld-sample-5.jpg"
                            class="img-fluid">
                        <h3>Produto 1</h3>
                        <p>Descrição do produto 4.</p>
                        <div class="preco">R$ 99,99</div>
                        <div class="avaliacao mb-3">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-o"></span>
                        </div>
                        <div class="botoes">
                            <input type="number" value="1" min="1" max="10" class="quantidade">
                            <a href="{{ url('produto') }}" class="btn btn-custom ">Comprar</a>
                        </div>
                    </li>
                    <li class="product-card bg-dark mb-3">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199427/samples/ecommerce/analog-classic.jpg"
                            class="img-fluid">
                        <h3>Produto 1</h3>
                        <p>Descrição do produto 4.</p>
                        <div class="preco">R$ 99,99</div>
                        <div class="avaliacao mb-3">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-o"></span>
                        </div>
                        <div class="botoes">
                            <input type="number" value="1" min="1" max="10" class="quantidade">
                            <a href="{{ url('produto') }}" class="btn btn-custom">Comprar</a>
                        </div>
                    </li>
                    <li class="product-card bg-dark mb-3">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                            class="img-fluid">
                        <h3>Produto 1</h3>
                        <p>Descrição do produto 4.</p>
                        <div class="preco">R$ 99,99</div>
                        <div class="avaliacao mb-3">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-o"></span>
                        </div>
                        <div class="botoes">
                            <input type="number" value="1" min="1" max="10" class="quantidade">
                            <a href="{{ url('produto') }}" class="btn btn-custom">Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
            <nav>
                <ul class="pagination justify-content-center ">
                    <li class="page-item disabled">
                        <a class="page-link btn-outline-custom" href="#" tabindex="-1"
                            aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link " href="#">1</a>
                    </li>
                    <li class="page-item ">
                        <a class="page-link " href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link btn-outline-custom" href="#">Próximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            //Banner Rotativo
            $('.banner-principal').slick({
                autoplay: true, // habilita a transição automática
                autoplaySpeed: 2000, // define a velocidade da transição automática
                dots: true, // exibe pontos de navegação
                arrows: false, // exibe setas de navegação
                infinite: true, // habilita navegação infinita
                speed: 500, // define a velocidade de transição
                fade: true, // habilita a transição de fade
                cssEase: 'linear' // define a transição de fade
            });

            $('.banner-principal div').each(function() {
                var link = $(this).find('a').attr('href');
                $(this).click(function() {
                    window.open(link);
                });
            });

            $('.carousel').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },

                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },

                    {
                        breakpoint: 2560,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
        });
    </script>
@endsection
