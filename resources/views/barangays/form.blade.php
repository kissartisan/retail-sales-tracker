@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $barangay->name }}"
        class="form-control @error('name') is-invalid @enderror"
        required>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="delivery_fee">Delivery Fee</label>
    <input type="text" name="delivery_fee" value="{{ $barangay->delivery_fee }}"
        class="form-control @error('delivery_fee') is-invalid @enderror" required>
    @error('delivery_fee')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('barangays.index') }}" class="btn btn-secondary">Back</a>
