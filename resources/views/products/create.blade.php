@extends('layouts.app')

@section('content')
    <h2 class="title">Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @include('products.form', [
        'buttonText' => 'Create'
        ])
    </form>
@endsection
