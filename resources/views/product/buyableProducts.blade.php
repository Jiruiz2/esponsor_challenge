@extends('app')

@section('content')
<main class="table">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th> id</th>
                    <th> name</th>
                    <th> description  </th>
                    <th> category </th>
                    <th> price </th>
                    <th> stock </th>
                    <th> user_id </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->description}} </td>
                        <td> {{$product->category}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->stock}} </td>
                        <td> {{$product->user_id}} </td>
                        <td>
                            <form action="{{ route('createTransaction') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Buy</button>
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
