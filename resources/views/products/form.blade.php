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
    <label for="supplier_price">Supplier Price</label>
    <input type="text" name="supplier_price" value="{{ $product->supplier_price }}"
        class="form-control @error('supplier_price') is-invalid @enderror" required>
    @error('supplier_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="selling_price">Selling Price</label>
    <input type="text" name="selling_price" value="{{ $product->selling_price }}"
        class="form-control @error('selling_price') is-invalid @enderror" required>
    @error('selling_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
