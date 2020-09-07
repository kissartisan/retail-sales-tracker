@extends('layouts.app')

@section('content')
    <h2 class="title">Edit Barangay: {{ $barangay->name }}</h1>

    <form action="{{ route('barangays.update', $barangay->getKey()) }}" method="POST">
        @method('PATCH')

        @include('barangays.form', [
            'buttonText' => 'Update'
        ])
    </form>
@endsection
