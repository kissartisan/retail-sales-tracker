@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $category->name }}"
        class="form-control @error('name') is-invalid @enderror"
        required>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
