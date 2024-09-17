@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>{{ isset($product) ? 'Edit' : 'Add' }} {{ isset($isCategory) && $isCategory ? 'Category' : 'Product' }}</h1>

    <form action="{{ isset($product) ? route('products.update', $product->id) : (isset($isCategory) && $isCategory ? route('categories.store') : route('products.store')) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif

        @if(isset($isCategory) && $isCategory)
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name ?? '') }}">
            </div>
        @else
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name ?? '') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $product->description ?? '') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if(isset($product) && $product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
            </div>
            <div class="mb-3">
                <label for="spek" class="form-label">Specifications</label>
                <input type="text" class="form-control" id="spek" name="spek" value="{{ old('spek', $product->spek ?? '') }}">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ (isset($product) && $product->category_id == $category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Add' }} {{ isset($isCategory) && $isCategory ? 'Category' : 'Product' }}</button>
    </form>
</div>
@endsection
