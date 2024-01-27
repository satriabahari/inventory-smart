@extends("layout.app")

<section>
    @section("content")
        <form action="{{route("user.update", $data->id)}}" method="POST">
            @csrf
            @method("put")

            <div class="flex justify-between">
                <label for="email" class="text-lg text-neutral-500">Email</label>
                <input type="text" name="email" id="email" class="rounded-lg py-2 px-4 outline-none bg-neutral-200" value={{$data->email}}>
            </div>

            <div class="flex justify-between">
                <label for="password" class="text-lg text-neutral-500">Password</label>
                <div>
                    <textarea name="password" id="password" cols="23" rows="5" class="rounded-lg py-2 px-4 outline-none bg-neutral-200">{{$data->des}}</textarea>
                </div>
            </div>

            <div class="space-y-4">
                <a href="{{route("user.index")}}">
                    <input type="button" value="Back" class="py-2 px-4 rounded-full border border-neutral-50 bg-neutral-400 text-neutral-50 w-full cursor-pointer hover:scale-105 transition active:scale-90">
                </a>
                <input type="submit" value="Update" class="py-2 px-4 rounded-full border border-neutral-50 bg-blue-500 text-neutral-50 w-full cursor-pointer hover:scale-105 transition active:scale-90">
            </div>
        </form>
    @endsection 
</section>