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
            {{-- <div class="col-md-7 p-3">
                <div id="product-carousel" class="carousel slide" data-bs-interval="false" data-bs-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/600x400.png?text=Product+Image+1" class="d-block w-100"
                                alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400.png?text=Product+Image+2" class="d-block w-100"
                                alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400.png?text=Product+Image+3" class="d-block w-100"
                                alt="Product Image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400.png?text=Product+Image+4" class="d-block w-100"
                                alt="Product Image 4">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#product-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#product-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div class="me-3">
                        <img src="https://via.placeholder.com/120x80.png?text=Product+Image+1" class="img-thumbnail"
                            alt="Product Image 1" data-bs-target="#product-carousel" data-bs-slide-to="0">
                    </div>
                    <div class="me-3">
                        <img src="https://via.placeholder.com/120x80.png?text=Product+Image+2" class="img-thumbnail"
                            alt="Product Image 2" data-bs-target="#product-carousel" data-bs-slide-to="1">
                    </div>
                    <div class="me-3">
                        <img src="https://via.placeholder.com/120x80.png?text=Product+Image+3" class="img-thumbnail"
                            alt="Product Image 3" data-bs-target="#product-carousel" data-bs-slide-to="2">
                    </div>
                    <div class="me-3">
                        <img src="https://via.placeholder.com/120x80.png?text=Product+Image+4" class="img-thumbnail"
                            alt="Product Image 3" data-bs-target="#product-carousel" data-bs-slide-to="3">
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-sm-4 mb-3">
                        <button class="btn btn-light justify-content-center d-flex align-items-center w-100">
                            <iconify-icon class="mx-2" icon="ic:baseline-share" width="20" height="20"
                                alt="Ícone de compartilhar"></iconify-icon>
                            Compartilhar
                        </button>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <button class="btn btn-light justify-content-center d-flex align-items-center w-100">
                            <iconify-icon class="mx-2" icon="ic:baseline-favorite-border" width="20" height="20"
                                alt="Ícone de favoritos"></iconify-icon>
                            Favoritos
                        </button>
                    </div>
                    <div class="col-sm-5 mb-3">
                        <button class="btn btn-light justify-content-center d-flex align-items-center text-center w-100">
                            <iconify-icon class="mx-2" icon="ic:baseline-add-shopping-cart" width="20" height="20"
                                alt="Ícone de carrinho de compras"></iconify-icon>
                            Adicionar ao carrinho
                        </button>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-5 text-center p-3">
                <h2 class="text-light ">Nome do Produto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, sed quas quo ullam cum atque, rem
                    dolore nulla quaerat aspernatur laboriosam sequi itaque eveniet doloremque aperiam accusantium ex ipsum.
                    Unde!</p>
                <span class="fs-3 text-white">R$ 500,00 <br> </span>
                <p>Em até 12x</p>
                <div class="mb-5">
                    <button type="button" class="btn btn-custom btn-lg me-3">Tabela de medidas</button>
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
                            <button class="btn btn-custom w-100">Comprar</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fs-6 text-white">Compra 100% segura e com qualidade</p>
                    </div>
                </div>
                <form>
                    <div class="row justify-content-center mb-3">
                        <div class="col-12 text-center">
                            <label for="inputZip" class="form-label text-light fs-5">Calcular Frete:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="inputZip" placeholder="Informe seu CEP">

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



        // // Adiciona o evento de clique em cada miniatura
        // $('.img-thumbnail').on('click', function() {
        //     // Obtém o valor dos atributos data-bs-target e data-bs-slide-to da miniatura clicada
        //     const target = $(this).data('bs-target');
        //     const slideTo = $(this).data('bs-slide-to');

        //     // Usa o método carousel() do Bootstrap para mudar a imagem exibida no carousel
        //     $(target).carousel(parseInt(slideTo));
        // });
    </script>
@endsection
