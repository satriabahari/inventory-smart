<x-app-layout>
  <section class="p-4 space-y-4">
    <div class="flex justify-between">
      <button class="py-2 text-sm text-neutral-50 px-4 rounded-md bg-blue-500">
        {{-- <a href="{{route("stock.create")}}">Create</a> --}}
        Create
      </button>
    </div>
    <div class="bg-neutral-50 rounded-xl p-2">
      <table class="w-full table-auto">
        <thead>
          <tr>
            <th class="text-neutral-900 bg-neutral-50 py-1 px-4 text-start text-sm">No</th>
            <th class="text-neutral-900 bg-neutral-50 py-1 px-4 text-start text-sm">Name</th>
            <th class="text-neutral-900 bg-neutral-50 py-1 px-4 text-start text-sm">Description</th>
            <th class="text-neutral-900 bg-neutral-50 py-1 px-4 text-start text-sm">Stock</th>
            <th class="text-neutral-900 bg-neutral-50 py-1 px-4 text-start text-sm">Actions</th>
          </tr> 
        </thead>
        <tbody>
          @foreach ($datas as $data)
          <tr>
            <td class="text-neutral-500 bg-neutral-50 py-1 px-4 text-sm">{{ $data->id }}</td>
            <td class="text-neutral-500 bg-neutral-50 py-1 px-4 text-sm">{{ $data->name }}</td>
            <td class="text-neutral-500 bg-neutral-50 py-1 px-4 text-sm">{{ $data->description }}</td>
            <td class="text-neutral-500 bg-neutral-50 py-1 px-4 text-sm">{{ $data->stock }}</td>
            <td class="text-neutral-50 bg-neutral-50 py-1 px-4 flex space-x-4">
              <button class="py-2 px-4 rounded-lg bg-green-500 text-sm">
                <a href="">Edit</a>
              </button>
              <form action="" method="POST">
                @csrf
                @method("DELETE")
                <button class="py-2 px-4 rounded-lg bg-red-500 text-sm" >Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</x-app-layout>
