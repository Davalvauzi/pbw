<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">{{ $product->product_name }}</h2>

                    <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <dt class="font-medium">Unit</dt>
                            <dd>{{ $product->unit }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium">Type</dt>
                            <dd>{{ $product->type }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium">Quantity</dt>
                            <dd>{{ $product->qty }}</dd>
                        </div>
                        <div>
                            <dt class="font-medium">Producer</dt>
                            <dd>{{ $product->producer }}</dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="font-medium">Information</dt>
                            <dd>{{ $product->information ?? '-' }}</dd>
                        </div>
                    </dl>

                    <div class="mt-6 space-x-2">
                        <a href="{{ route('product-edit', $product->id) }}"
                            class="px-4 py-2 text-white bg-yellow-500 rounded">Edit</a>
                        <a href="{{ route('product-index') }}"
                            class="px-4 py-2 text-gray-700 bg-gray-200 rounded">Back</a>
                        <a href="{{ route('products.export') }}" class="btn btn-success mb-3">Export ke Excel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
