<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold">Product List</h2>
                            <a href="{{ route('product-create') }}" class="px-4 py-2 text-white bg-indigo-600 rounded">Create</a>
                        </div>

                        @if(session('success'))
                            <div class="p-2 mb-4 text-white bg-green-500 rounded">{{ session('success') }}</div>
                        @endif

                        @if($products->isEmpty())
                            <p>No products yet.</p>
                        @else
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producer</th>
                                        <th class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->product_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->unit }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->qty }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->producer }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right space-x-2">
                                                <a href="{{ route('product-show', $product->id) }}" class="text-indigo-600">View</a>
                                                <a href="{{ route('product-edit', $product->id) }}" class="text-yellow-600">Edit</a>
                                                <form action="{{ route('product-destroy', $product->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
