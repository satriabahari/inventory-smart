@extends("layout.app")

<section>
  @section('content')
    <section>
      <button class="py-2 px-4 rounded-lg bg-blue-500">
        <a href="{{route("stock.create")}}">Create</a>
      </button>
      <table class="border-collapse border border-neutral-500">
        <thead>
          <tr>
            <th class="border border-neutral-700 py-2">No</th>
            <th class="border border-neutral-700 py-2">Name</th>
            <th class="border border-neutral-700 py-2">Description</th>
            <th class="border border-neutral-700 py-2">Stock</th>
            <th class="border border-neutral-700 py-2">Actions</th>
          </tr> 
        </thead>
        <tbody>
          @foreach ($datas as $data)
          <tr>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->id }}</td>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->name }}</td>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->description }}</td>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->stock }}</td>
            <td class="border border-neutral-700 py-2 px-4 flex ">
              <button class="py-2 px-4 rounded-lg bg-neutral-300">
                <a href="{{route("stock.edit", $data->id)}}">Edit</a>
              </button>
              <form action="{{route("stock.destroy", $data->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="py-2 px-4 rounded-lg bg-neutral-300" >Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
    
  @endsection
</section>