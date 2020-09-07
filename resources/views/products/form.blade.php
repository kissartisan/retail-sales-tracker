@csrf

<div class="form-group">
    <label for="project_id">Project:</label>
    <select name="project_id"
        class="form-control @error('name') is-invalid @enderror"
        required>
        <option value="">Choose One</option>
        @foreach($projects as $id => $name)
            <option value="{{ $id }}" {{ $id === $task->project_id ? 'selected' : '' }} >
                {{ $name }}
            </option>
        @endforeach
    </select>
    @error('project_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $task->name }}"
        class="form-control @error('name') is-invalid @enderror"
        required>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
