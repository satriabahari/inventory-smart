@extends("layout.app")

<section>
  @section('content')
    <section>
      <button class="py-2 px-4 rounded-lg bg-blue-500">
        <a href="{{route("user.create")}}">Create</a>
      </button>
      <table class="border-collapse border border-neutral-500">
        <thead>
          <tr>
            <th class="border border-neutral-700 py-2">No</th>
            <th class="border border-neutral-700 py-2"> Email</th>
            <th class="border border-neutral-700 py-2"> Password</th>
            <th class="border border-neutral-700 py-2"> Actions</th>
          </tr> 
        </thead>
        <tbody>
          @foreach ($datas as $data)
          <tr>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->id }}</td>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->email }}</td>
            <td class="border border-neutral-700 py-2 px-4">{{ $data->password }}</td>
            <td class="border border-neutral-700 py-2 px-4 flex ">
              <button class="py-2 px-4 rounded-lg bg-neutral-300">
                <a href="{{route("user.edit", $data->id)}}">Edit</a>
              </button>
              <form action="{{route("user.destroy", $data->id)}}" method="POST">
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