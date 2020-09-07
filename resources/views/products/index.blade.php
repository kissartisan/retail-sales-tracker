@extends('layouts.app')

@section('content')
    <div class="header mb-2 d-flex justify-content-between align-items-center">
        <h1>Products</h1>
        <a class="btn btn-primary" href="{{ route('products.create') }}">New Product</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Original Price</th>
                <th scope="col">Sale Price</th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tr class="list__item">
            <th>{{ $product->getKey() }}</th>
            <th>{{ $product->name }}</th>
            <th>{{ $product->category->name }}</th>
            <th>{{ $product->original_price}}</th>
            <th>{{ $product->sale_price }}</th>
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}
@endsection
