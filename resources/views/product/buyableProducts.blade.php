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
                        <td> Comprar </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
