@extends('layouts.app')

@section('content')
    <div class="header mb-2 d-flex justify-content-between align-items-center">
        <h1>Categories</h1>
        <a class="btn btn-primary" href="{{ route('categories.create') }}">New Category</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($categories as $category)
            <tr class="list__item">
                <th>{{ $category->getKey() }}</th>
                <th>{{ $category->name }}</th>
                <th class="list__actions d-flex">
                    <a href={{ route('categories.edit', $category) }} class="btn btn-warning list__actions-item ml-1">
                        Edit
                    </a>
                    <form method="POST" action={{ route('categories.destroy', $category) }} class="list__actions-item ml-1">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

    {{ $categories->links() }}

@endsection
