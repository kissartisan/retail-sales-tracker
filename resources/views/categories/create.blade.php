@extends('layouts.app')

@section('content')
    <h2 class="title">Create Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @include('categories.form', [
            'category' => new App\Models\Category,
            'buttonText' => 'Create'
        ])
    </form>
@endsection
