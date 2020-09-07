@extends('layouts.app')

@section('content')
    <h2 class="title">Edit task: {{ $task->name }}</h1>

    <form action="{{ route('tasks.update', $task->getKey()) }}" method="POST">
        @method('PATCH')

        @include('tasks.form', [
            'projects' => $projects,
            'buttonText' => 'Update'
        ])
    </form>
@endsection
