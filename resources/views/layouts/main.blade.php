<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formatacao.min.css') }}">
</head>

<body>
    <header>
        <nav class="bg-dark">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-sm-4 mb-3 mb-sm-0 d-flex justify-content-center">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('img/slogan.png') }}" alt="Logo O Jumento da Preferência Nacional"
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0  ">
                        <form action="">
                            <div class="d-flex justify-content-center busca">
                                <input type="search" class="form-control-lg search w-100"
                                    placeholder="Buscar produtos...">
                                <button class="botao-busca" type="submit">
                                    <iconify-icon icon="clarity:search-line" width="30px"></iconify-icon>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg  bg-dark">
            <div class="container">
                <div class="d-flex d-sm-none justify-content-end align-items-center w-100">
                    <button class="hamburger" type="button" aria-label="Menu">
                        <iconify-icon icon="system-uicons:menu-hamburger" width="50px"></iconify-icon>
                    </button>
                    <a class="position-relative " href="#">
                        <iconify-icon class="shopp-cart " icon="clarity:shopping-cart-line" width="36px">
                        </iconify-icon>
                        <span class="cart-badge translate-middle rounded-pill badge bg-danger">
                            2
                        </span>
                    </a>
                </div>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 menu d-sm-flex">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Promoção</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Novidades</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Acessórios</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Enxoval</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Animais</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('todos-produtos') }}">Planos de
                            assinatura</a></li>
                    <li class="d-sm-none"><button class="close btn btn-custom px-5" type="button">Fechar</button>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto d-none d-sm-flex">
                    <li class="nav-item">
                        @if (auth()->check())
                            <a class="nav-link" href="">
                                Minha conta
                            </a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">
                                Entre
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Cadastrar-se</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link position-relative" href="{{ url('carrinho') }}">
                            <iconify-icon icon="clarity:shopping-cart-line" width="26px"></iconify-icon>
                            <span class="position-absolute top-2 right-0 translate-middle rounded-pill badge bg-danger">
                                2
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <main>
        @yield('content')

        <div class="whatsapp">
            <a href="" target="_blank">
                <iconify-icon icon="logos:whatsapp-icon" width="40" height="40"></iconify-icon>
            </a>
        </div>
    </main>

    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Empresa</h5>
                    <ul class="navbar-nav">
                        <li>
                            <a class="footer-link" href="#">Sobre nós</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Contato</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Termos e condições</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Política de privacidade</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Produtos</h5>
                    <ul class="navbar-nav">
                        <li>
                            <a class="footer-link" href="#">Promoção</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Produtos Populares</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Acessórios</a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">Planos de assinatura</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Assine nossa Newsletter</h5>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Digite seu e-mail">
                            <div class="input-group-append">
                                <button class="btn btn-custom" type="submit">Inscreva-se</button>
                            </div>
                        </div>
                    </form>
                    <ul class="footer-links text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Facebook">
                                <iconify-icon icon="ant-design:facebook-outlined" width="30"
                                    alt="Ícone do Facebook"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Instagram">
                                <iconify-icon icon="akar-icons:instagram-fill" width="30"
                                    alt="Ícone do Instagram"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="WhatsApp">
                                <iconify-icon icon="ic:baseline-whatsapp" width="30" alt="Ícone do WhatsApp">
                                </iconify-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="my-4">
                <p class="text-center">Av. Amazonas, 6020, BH/MG - Parque de Exposições Bolívar de Andrade, CEP:
                    30.510-000
                </p>
            </div>
            <div class="row align-items-center mt-3">
                <hr>
                <div class="col-md-12">
                    <p class="text-center">&copy; {{ date('Y') }} ABCJPêga Todos os direitos reservados.</p>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>



    @yield('js')
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $(".hamburger").click(function() {
                    $(this).toggleClass("is-active");
                    $(".menu").toggleClass("is-active");
                });
                $(".close").click(function() {
                    $(".hamburger").removeClass("is-active");
                    $(".menu").removeClass("is-active");
                });

                $(".menu a").click(function() {
                    $(".hamburger").removeClass("is-active");
                    $(".menu").removeClass("is-active");
                });
            });

            // Inputs number de quantidades
            $(document).on("click", ".btn-minus, .btn-plus", function() {
                var inputQuantity = $(this).parent().siblings("input.input-quantity");
                var isMinusButton = $(this).hasClass("btn-minus");
                var quantity = parseInt(inputQuantity.val());
                if (isMinusButton) {
                    quantity = Math.max(quantity - 1, 1);
                } else {
                    quantity += 1;
                }
                inputQuantity.val(quantity);
            });
        });
    </script>
</body>

</html>
