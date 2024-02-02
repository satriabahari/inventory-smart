<x-app-layout>
  <section class="p-8">
    <div class="container mx-auto">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 dark:text-gray-50">Tambah Data</h1>
    
            <!-- Form -->
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
    
                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 font-medium mb-2">Nama Category</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2" required>
                </div>

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