@csrf

<div class="form-group">
    <label for="category_id">Category:</label>
    <select name="category_id" class="form-control @error('name') is-invalid @enderror" required>
        <option value="">Choose One</option>
        @foreach($categories as $id => $name)
        <option value="{{ $id }}" {{ $id === $product->category_id ? 'selected' : '' }}>
            {{ $name }}
        </option>
        @endforeach
    </select>
    @error('category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $product->name }}"
        class="form-control @error('name') is-invalid @enderror"
        required>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="original_price">Original Price</label>
    <input type="text" name="original_price" value="{{ $product->original_price }}"
        class="form-control @error('original_price') is-invalid @enderror" required>
    @error('original_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="sale_price">Sale Price</label>
    <input type="text" name="sale_price" value="{{ $product->sale_price }}"
        class="form-control @error('sale_price') is-invalid @enderror" required>
    @error('sale_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
