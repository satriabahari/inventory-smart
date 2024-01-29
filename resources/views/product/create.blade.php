<x-app-layout>
  <section class="p-8">
    <div class="container mx-auto">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 dark:text-gray-50">Tambah Data</h1>
    
            <!-- Form -->
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
    
                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 font-medium mb-2">Nama</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
    
                <!-- Deskripsi -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-600 font-medium mb-2">Deskripsi</label>
                    <textarea name="description" id="description" class="w-full border-gray-300 rounded-md p-2" rows="4" required></textarea>
                </div>
    
                <!-- Stock -->
                <div class="mb-6">
                    <label for="stock" class="block text-gray-600 font-medium mb-2">Stock</label>
                    <input type="number" name="stock" id="stock" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
    
                <!-- Tombol Submit -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
      </div>
  </section>
</x-app-layout>