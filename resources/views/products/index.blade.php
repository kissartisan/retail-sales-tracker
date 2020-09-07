@extends('layouts.app')

@section('content')
    <div class="header mb-2">
        <h1>Tasks</h1>
        <a class="btn btn-primary" href="{{ route('tasks.create') }}">New Task</a>
    </div>

    <draggable-tasks
        :tasks="{{ $tasks }}"
        update-task-priorities="{{ route('tasks.priorities.update') }}"
    ></draggable-tasks>
@endsection
