@extends('app')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Create product</h3>
                    <div class="card-body">
                        <form action="{{ route('createProduct') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Category" id="category" class="form-control" name="category" required autofocus>
                                    @if ($errors->has('category'))
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                            </div>      
                            <div class="row">
                                <div class="col">
                                    <input type="number" placeholder="Price" id="price" class="form-control" name="price" min="0" required autofocus>
                                    @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="col">
                                    <input type="number" placeholder="Stock" id="stock" class="form-control" name="stock" min="0" required autofocus>
                                    @if ($errors->has('stock'))
                                    <span class="text-danger">{{ $errors->first('stock') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <textarea type="text" placeholder="Description" id="description" class="form-control" name="description" required autofocus></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<main class="table">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th> Name</th>
                    <th> Category </th>
                    <th> Price </th>
                    <th> Stock </th>
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
                        <td> {{$product->description}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
