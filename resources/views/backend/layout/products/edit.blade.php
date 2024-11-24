@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input id="name" name="name" type="text" class="form-input mt-2 block w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500" value="{{ old('name', $product->name) }}" required>
            </div>

            <!-- Description -->
            <div class="mb-5">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="form-input mt-2 block w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <!-- Price -->
            <div class="mb-5">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input id="price" name="price" type="number" class="form-input mt-2 block w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500" value="{{ old('price', $product->price) }}" required>
            </div>

            <!-- Stock -->
            <div class="mb-5">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input id="stock" name="stock" type="number" class="form-input mt-2 block w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500" value="{{ old('stock', $product->stock) }}" required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update Product
                </button>
            </div>
        </form>
    </div>
@endsection
