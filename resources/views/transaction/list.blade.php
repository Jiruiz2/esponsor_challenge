@extends('app')

@section('content')
<main class="table">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> Product</th>
                    <th> Product amount </th>
                    <th> Date </th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                        <td> {{$transaction->product->name}} </td>
                        <td> {{$transaction->product_amount}} </td>
                        <td> {{$transaction->created_at}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
