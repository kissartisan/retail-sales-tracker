@extends('layouts.app')

@section('content')
    <h2 class="title">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @include('tasks.form', [
            'task' => new App\Task,
            'projects' => $projects,
            'buttonText' => 'Create'
        ])
    </form>
@endsection
