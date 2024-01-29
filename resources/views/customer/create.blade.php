<x-app-layout>
  <section class="p-8">
    <div class="container mx-auto">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 dark:text-gray-50">Tambah Data</h1>
    
            <!-- Form -->
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
    
                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 font-medium mb-2">Name</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
    
                <!-- Deskripsi -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 font-medium mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md p-2" required>
                </div>
    
                <!-- Stock -->
                <div class="mb-6">
                    <label for="address" class="block text-gray-600 font-medium mb-2">Address</label>
                    <textarea name="address" id="address" class="w-full border-gray-300 rounded-md p-2" rows="4" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-gray-600 font-medium mb-2">Phone</label>
                    <input type="number" name="phone" id="phone" class="w-full border-gray-300 rounded-md p-2" required>
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