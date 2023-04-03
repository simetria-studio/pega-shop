@extends('layouts.main')

@section('title', 'ABCJPêga - Todos produtos')

@section('content')
    <div class="container my-5">
        <div class="row">
            {{-- categorias e preços --}}
            <div class="col-md-3">
                <h3 class="text-center mb-3">
                    <strong>Categorias</strong>
                </h3>
                <div class="mb-4">
                    <select class="form-select" name="" id="">
                        <option selected>Promoções</option>
                        <option>Todos</option>
                        <option>Novidades</option>
                        <option>Acessórios</option>
                        <option>Enxoval</option>
                        <option>Animais</option>
                    </select>
                </div>
                <hr>
                <h3 class="text-center mb-3">
                    <strong>Preços</strong>
                </h3>

                <div class="row justify-content-center ">
                    <div class="col-6 ">
                        <label for="" class="form-label">De:</label>
                        <input type="text" class="form-control" placeholder="R$ 0,00">
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label">Até:</label>
                        <input type="text" class="form-control" placeholder="R$ 0,00">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-dark mt-3">Filtrar</button>
                    </div>
                </div>
            </div>
            {{-- filtros e produtos --}}
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 offset-sm-8 mb-3  ">
                        <div class="row">
                            <label for="filter" class="col-sm-4 col-form-label">filtrar por:</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="" id="filter">
                                    <option value="" selected>Menor preço</option>
                                    <option value="">Maior preço</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ">
                        <div class="row">
                            <div class="col-sm-6 mb-4">
                                <div class="produto bg-dark card">
                                    <img src="{{ asset('img/produto-1.png') }}">
                                    <h3>Titulo do item</h3>
                                    <span class="preco fs-3 mb-2">R$ 500,00</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        At
                                        porro ipsum unde facere esse itaque corrupti temporibus incidunt rerum maiores,
                                        fugit omnis doloribus sint laudantium, reprehenderit amet quas enim similique.
                                    </p>
                                    <div class="favorito bg-dark">
                                        <button type="button" class="btn heart">
                                            <i class="fa-regular fa-heart "></i>
                                        </button>
                                    </div>
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
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-minus"
                                                        type="button">-</button>
                                                </div>
                                                <input type="text" class="form-control text-center input-quantity"
                                                    value="2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-plus"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <button class="btn btn-custom">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <div class="produto bg-dark card">
                                    <img src="{{ asset('img/produto-1.png') }}">
                                    <h3>Titulo do item</h3>
                                    <span class="preco fs-3 mb-2">R$ 500,00</span>
                                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        At
                                        porro ipsum unde facere esse itaque corrupti temporibus incidunt rerum maiores,
                                        fugit omnis doloribus sint laudantium, reprehenderit amet quas enim similique.
                                    </p>
                                    <div class="avaliacao mb-3">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-half-o"></span>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-minus"
                                                        type="button">-</button>
                                                </div>
                                                <input type="text" class="form-control text-center input-quantity"
                                                    value="2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-plus"
                                                        type="button">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <button class="btn btn-custom">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <div class="produto bg-dark card">
                                    <img src="{{ asset('img/produto-1.png') }}">
                                    <h3>Titulo do item</h3>
                                    <span class="preco fs-3 mb-2">R$ 500,00</span>
                                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        At
                                        porro ipsum unde facere esse itaque corrupti temporibus incidunt rerum maiores,
                                        fugit omnis doloribus sint laudantium, reprehenderit amet quas enim similique.
                                    </p>
                                    <div class="favorito bg-dark">
                                        <button type="button" class="btn heart">
                                            <i class="fa-regular fa-heart "></i>
                                        </button>
                                    </div>
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
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-minus"
                                                        type="button">-</button>
                                                </div>
                                                <input type="text" class="form-control text-center input-quantity"
                                                    value="2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <button class="btn btn-custom">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <div class="produto bg-dark card">
                                    <img src="{{ asset('img/produto-1.png') }}">
                                    <h3>Titulo do item</h3>
                                    <span class="preco fs-3 mb-2">R$ 500,00</span>
                                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        At
                                        porro ipsum unde facere esse itaque corrupti temporibus incidunt rerum maiores,
                                        fugit omnis doloribus sint laudantium, reprehenderit amet quas enim similique.
                                    </p>
                                    <div class="avaliacao mb-3">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-half-o"></span>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary btn-minus"
                                                        type="button">-</button>
                                                </div>
                                                <input type="text" class="form-control text-center input-quantity"
                                                    value="2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <button class="btn btn-custom">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
