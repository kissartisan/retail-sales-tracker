@extends('layouts.app')

@section('content')
    <h2 class="title">Create Barangay</h1>

    <form action="{{ route('barangays.store') }}" method="POST">
        @include('barangays.form', [
            'buttonText' => 'Create'
        ])
    </form>
@endsection
