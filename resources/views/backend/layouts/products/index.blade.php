@extends('backend.app')
<!-- @section('title', 'Dashboard') -->

@section('content')
<div class="container mx-auto px-2 sm:px-4 lg:px-4 " style="margin-top: 100px">
    <!-- Heading Section -->
    <div class="flex items-center justify-between mb-6">
        <!-- <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Product Management</h1> -->
        <a href="{{ route('products.create') }}" class="btn btn-primary px-6 py-3 bg-blue-500 text-white font-medium rounded-md shadow hover:bg-blue-600">
            + Add Product
        </a>
    </div>

    <!-- Table Section -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-gray-50 border-b border-gray-300">
                <tr>
                    <th class="px-6 py-3 text- center text-sm font-medium text-gray-600 border-r border-gray-300">Name</th>
                    <th class="px-6 py-3 text- center text-sm font-medium text-gray-600 border-r border-gray-300">Price</th>
                    <th class="px-6 py-3 text- center text-sm font-medium text-gray-600 border-r border-gray-300">Description</th>
                    <th class="px-6 py-3 text- center text-sm font-medium text-gray-600 border-r border-gray-300">Stock</th>
                    <th class="px-6 py-3 text- center text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($products as $product)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-800 border-r border-gray-300">{{ $product->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 border-r border-gray-300">${{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 border-r border-gray-300">
                        <!-- Display description as list -->
                        <ul class="list-disc pl-5">
                            @foreach (explode("\n", $product->description) as $line)
                            <li>{{ $line }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-800 border-r border-gray-300">{{ $product->stock }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 flex items-center space-x-4">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>

                        <!-- Delete Form (with modal confirmation) -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block ml-4">
                            @csrf
                            @method('DELETE')

                            <!-- Trigger Delete Modal -->
                            <button type="button" class="text-red-600 hover:text-red-800 font-medium" onclick="confirmDelete" ({{ $product->id }})">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal for Deletion Confirmation -->
    <!-- <div id="deleteModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Are you sure you want to delete this product?</h2>
            <p class="text-gray-600 mb-4">This action cannot be undone.</p>
            <div class="flex justify-end space-x-4">
                <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400" onclick="closeModal()">Cancel</button>
                <form id="deleteForm" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                        Confirm Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div> -->

    <!-- JavaScript for Modal -->
    <script>
        function confirmDelete(productId) {
            // Show the modal and set the action URL for form submission
            document.getElementById('deleteModal').classList.remove('hidden');
            document.getElementById('deleteForm').action = `/products/${productId}`;
        }

        function closeModal() {
            // Close the modal
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
    @endsection