@extends('layouts.app')

@section('content')
    <div class="header mb-2">
        <h1>Categories</h1>
        <a class="btn btn-primary" href="{{ route('categories.create') }}">New Category</a>
    </div>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
            </tr>
        </thead>
        @foreach($categories as $category)
            <tr class="list__item">
                <th>{{ $category->getKey() }}</th>
                <th>{{ $category->name }}</th>
            </tr>
        @endforeach
    </table>

@endsection
