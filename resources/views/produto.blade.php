@extends('layouts.main')

@section('title', 'ABCJPêga - Detalhes do Produto')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-md-7">
                <div class="product-single">
                    <div class="carousel-images">
                        <div>
                            <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                                alt="Product Image 1" class="product-image">
                        </div>
                        <div>
                            <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                                alt="Product Image 2" class="product-image">
                        </div>
                        <div>
                            <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                                alt="Product Image 3" class="product-image">
                        </div>
                        <div>
                            <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                                alt="Product Image 3" class="product-image">
                        </div>
                    </div>
                    <div class="carousel-thumbnails">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                            alt="Product Image 1">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                            alt="Product Image 2">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                            alt="Product Image 3">
                        <img src="https://res.cloudinary.com/dknfkmuu9/image/upload/v1680199436/samples/ecommerce/leather-bag-gray.jpg"
                            alt="Product Image 3">
                    </div>
                    <div class="carousel-buttons">
                        <button class="btn btn-light share-btn">
                            <iconify-icon class="mx-2" icon="ic:baseline-share" width="20" height="20"
                                alt="Ícone de compartilhar"></iconify-icon>
                            Compartilhar
                        </button>

                        <button class="btn btn-light favorite-btn">
                            <iconify-icon class="mx-2" icon="ic:baseline-favorite-border" width="20" height="20"
                                alt="Ícone de favoritos"></iconify-icon>
                            Favoritos
                        </button>

                        <button class="btn btn-light add-to-cart-btn ">
                            <iconify-icon class="mx-2" icon="ic:baseline-add-shopping-cart" width="20" height="20"
                                alt="Ícone de carrinho de compras"></iconify-icon>
                            Adicionar ao carrinho
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center p-3">
                <h2 class="text-light ">Nome do Produto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, sed quas quo ullam cum atque, rem
                    dolore nulla quaerat aspernatur laboriosam sequi itaque eveniet doloremque aperiam accusantium ex ipsum.
                    Unde!</p>
                <span class="fs-3 text-white">R$ 500,00 <br> </span>
                <p>Em até 12x</p>
                <div class="mb-5">
                    <button type="button" class="btn btn-warning btn-lg me-3">Tabela de medidas</button>
                </div>
                <div class="text-success position-relative col-6 mx-auto mb-4">
                    <a class="btn me-3 btn-outline-success w-100" href="http://" target="_blank"
                        rel="noopener noreferrer">Dúvidas?
                        <iconify-icon class="position-absolute duvida translate-middle top-50" icon="ic:baseline-whatsapp"
                            width="25" height="25" alt="Ícone do WhatsApp"></iconify-icon>
                    </a>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-3">
                        <div class="mb-3">
                            <input type="number" class="form-control" id="inputQuantity" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <button class="btn btn-success w-100">Comprar</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fs-6 text-white">Compra 100% segura e com qualidade</p>
                    </div>
                </div>
                <form>
                    <div class="col-12 text-center">
                        <label for="inputZip" class="form-label text-light fs-5">Calcular Frete:</label>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <div>
                            <input type="text" class="form-control" id="inputZip" placeholder="Informe seu CEP">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.carousel-images').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.carousel-thumbnails'
            });

            $('.carousel-thumbnails').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.carousel-images',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
            $('.product-image').elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                easing: true,
                gallery: 'thumbnails',
                galleryActiveClass: 'active',
                imageCrossfade: true,
                loadingIcon: 'https://cdn.jsdelivr.net/gh/blattmann/oi-slackbot/img/loading.gif',
                scrollZoom: true,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                zoomWindowWidth: 300,
                zoomWindowHeight: 300,
                borderSize: 1,
                borderColour: '#888'
            });


            $('.share-btn').on('click', function() {
                // Lógica para compartilhar o produto
            });

            $('.favorite-btn').on('click', function() {
                // Lógica para adicionar/remover o produto dos favoritos
            });

            $('.add-to-cart-btn').on('click', function() {
                // Lógica para adicionar o produto ao carrinho
            });
        });
    </script>
@endsection
