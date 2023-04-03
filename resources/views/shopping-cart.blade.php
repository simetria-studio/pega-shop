@extends('layouts.main')

@section('title', 'ABCJPêga - Meu carrinho')

@section('content')
    <div class="container my-5">
        <h2>Meu carrinho</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th></th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="https://via.placeholder.com/80" alt="Produto 1" class="product-img">
                    </td>
                    <td> Produto 1</td>
                    <td>R$ 50,00</td>
                    <td class="td-quantidade">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                            </div>
                            <input type="text" class="form-control text-center input-quantity" value="2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                            </div>
                        </div>
                    </td>
                    <td>R$ 100,00</td>
                    <td>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Total:</td>
                    <td>R$ 125,00</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <div class="d-flex justify-content-end gap-2">
            <a href="{{ route('home') }}" class="btn btn-primary">Continuar comprando</a>
            <a href="#" class="btn btn-success">Finalizar compra</a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        

    </script>
@endsection
