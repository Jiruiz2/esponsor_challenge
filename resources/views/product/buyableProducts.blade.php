@extends('app')

@section('content')
<main class="table">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> Name</th>
                    <th> Category </th>
                    <th> Price </th>
                    <th> Stock </th>
                    <th> Seller </th>
                    <th> Description </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                        <td> {{$product->name}} </td>
                        <td> {{$product->category}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->stock}} </td>
                        <td> {{$product->user->username}} </td>
                        <td> {{$product->description}} </td>
                        <td>
                            <form action="{{ route('createTransaction') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Comprar</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
