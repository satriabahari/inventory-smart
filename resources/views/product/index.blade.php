<x-app-layout>
    <section class="h-full p-4 space-y-4">
        <div class="flex justify-between">
            <x-button :route="route('product.create')" color="blue" text="Create" icon="fa-plus"/>
        </div>

        @if (count($datas) > 0)
            <div class="flex flex-col justify-between h-full bg-neutral-50 dark:bg-gray-800 rounded-xl p-2">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">No</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Name</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Description</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Category</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Price</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Stock</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Actions</th>
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->id }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->name }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->description }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->cattegory->name }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->price }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->stock }}</td>
                                <td class="text-neutral-50 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 flex space-x-4">
                                    <x-button :route="route('product.edit', $data->id)" color="green" text="Edit" icon="fa-pen-to-square"/>
                                    <form action="{{ route('product.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <x-button color="red" text="Delete" icon="fa-trash"/>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <x-data-not-found/>
        @endif
    </section>
</x-app-layout>
