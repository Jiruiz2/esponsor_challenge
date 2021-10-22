@extends('app')

@section('content')
<main class="table">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th> id</th>
                    <th> product</th>
                    <th> user_id  </th>
                    <th> product_amount </th>
                    <th> created_at </th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                        <td> {{$transaction->id}} </td>
                        <td> {{$transaction->product->name}} </td>
                        <td> {{$transaction->user_id}} </td>
                        <td> {{$transaction->product_amount}} </td>
                        <td> {{$transaction->created_at}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
