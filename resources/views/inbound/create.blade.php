<x-app-layout>
    <section class="p-8">
        <div class="container mx-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-gray-500 dark:text-gray-300">Create Product Masuk</h1>

                <!-- Form -->
                <form action="{{ route('inbound.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Product -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="product_id" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Product<x-star-required/></label>
                        <select name="product_id" id="product_id" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" required>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" class="bg-gray-50 text-gray-500 dark:text-gray-300 hover:bg-gray-200">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Supplier -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="supplier_id" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Supplier<x-star-required/></label>
                        <select name="supplier_id" id="supplier_id" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" required>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" class="bg-gray-50 text-gray-500 dark:text-gray-300 hover:bg-gray-200">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Stock -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="stock" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Stock<x-star-required/></label>
                        <input type="number" name="stock" id="stock" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Stock" required>
                    </div>

                    <!-- Tanggal -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="date" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Date<x-star-required/></label>
                        <input type="date" name="date" id="date" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" required>
                    </div>

                    <!-- Tombol Submit -->
                    <div>
                        <button type="submit" class="flex items-center space-x-2 bg-blue-500 text-gray-50 dark:text-gray-200 py-2 px-4 rounded-md ">
                            <p>Create</p>
                            <i class="fa-solid fa-circle-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
