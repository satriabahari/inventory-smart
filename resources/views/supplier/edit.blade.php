<x-app-layout>
    <section class="p-8">
        <div class="container mx-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-gray-500 dark:text-gray-300">Edit Supplier</h1>

                <!-- Form -->
                <form action="{{ route('supplier.update', $data->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="name" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Name<x-star-required/></label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Supplier Name" value="{{ old('name', $data->name) }}" required>
                    </div>

                    <!-- Address -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="address" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Address<x-star-required/></label>
                        <textarea name="address" id="address" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" rows="3" placeholder="Supplier Address" required>{{ old('address', $data->address) }}</textarea>
                    </div>

                    <!-- Email -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="email" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Email<x-star-required/></label>
                        <input type="email" name="email" id="email" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Supplier Email" value="{{ old('email', $data->email) }}" required>
                    </div>

                    <!-- Phone -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="phone" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Phone<x-star-required/></label>
                        <input type="text" name="phone" id="phone" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Supplier Phone" value="{{ old('phone', $data->phone) }}" required>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="flex items-center space-x-2 bg-blue-500 text-gray-50 dark:text-gray-200 py-2 px-4 rounded-md">
                            <p>Update</p>
                            <i class="fa-solid fa-circle-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>