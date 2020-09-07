@extends('layouts.app')

@section('content')
    <div class="header mb-2 d-flex justify-content-between align-items-center">
        <h1>Products</h1>
        <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Supplier Price</th>
                <th scope="col">Selling Price</th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tr class="list__item">
            <th>{{ $product->getKey() }}</th>
            <th>{{ $product->name }}</th>
            <th>{{ $product->category->name }}</th>
            <th>{{ $product->supplier_price}}</th>
            <th>{{ $product->selling_price }}</th>
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}
@endsection
