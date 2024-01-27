@extends("layout.app")

<section>
    @section("content")
        <form action="{{route("stock.store")}}" method="POST">
            @csrf

            <div class="flex justify-between">
                <label for="name" class="text-lg text-neutral-500">Name</label>
                <input type="text" name="name" id="name" class="rounded-lg py-2 px-4 outline-none bg-neutral-200">
            </div>

            <div class="flex justify-between">
                <label for="description" class="text-lg text-neutral-500">Description</label>
                <div>
                    <textarea name="description" id="description" cols="23" rows="5" class="rounded-lg py-2 px-4 outline-none bg-neutral-200"></textarea>
                </div>
            </div>

            <div class="flex justify-between">
                <label for="stock" class="text-lg text-neutral-500">Stock</label>
                <div>
                    <textarea name="stock" id="stock" cols="23" rows="5" class="rounded-lg py-2 px-4 outline-none bg-neutral-200"></textarea>
                </div>
            </div>

            <div class="space-y-4">
                <a href="{{route("stock.index")}}">
                    <input type="button" value="Back" class="py-2 px-4 rounded-full border border-neutral-50 bg-neutral-400 text-neutral-50 w-full cursor-pointer hover:scale-105 transition active:scale-90">
                </a>
                <input type="submit" value="Submit" class="py-2 px-4 rounded-full border border-neutral-50 bg-blue-500 text-neutral-50 w-full cursor-pointer hover:scale-105 transition active:scale-90">
            </div>
        </form>
    @endsection 
</section>