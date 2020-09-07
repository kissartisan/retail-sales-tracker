@extends('layouts.app')

@section('content')
    <h2 class="title">Edit task: {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->getKey()) }}" method="POST">
        @method('PATCH')

        @include('products.form', [
            'categories' => $categories,
            'buttonText' => 'Update'
        ])
    </form>
@endsection
