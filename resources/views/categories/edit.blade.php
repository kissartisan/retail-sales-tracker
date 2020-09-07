@extends('layouts.app')

@section('content')
    <h2 class="title">Edit category: {{ $category->name }}</h1>

    <form action="{{ route('categories.update', $category->getKey()) }}" method="POST">
        @method('PATCH')

        @include('categories.form', [
            'buttonText' => 'Update'
        ])
    </form>
@endsection
