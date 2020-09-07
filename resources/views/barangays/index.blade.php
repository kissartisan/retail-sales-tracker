@extends('layouts.app')

@section('content')
    <div class="header mb-2 d-flex justify-content-between align-items-center">
        <h1>Barangays</h1>
        <a class="btn btn-primary" href="{{ route('barangays.create') }}">Add Barangay</a>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Delivery Fee</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($barangays as $barangay)
            <tr class="list__item">
                <th>{{ $barangay->getKey() }}</th>
                <th>{{ $barangay->name }}</th>
                <th>{{ $barangay->delivery_fee }}</th>
                <th class="list__actions d-flex">
                    <a href={{ route('barangays.edit', $barangay) }} class="btn btn-warning list__actions-item ml-1">
                        Edit
                    </a>
                    <form method="POST" action={{ route('barangays.destroy', $barangay) }} class="list__actions-item ml-1">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

    {{ $barangays->links() }}

@endsection
