{{-- <a href="{{route("product.create")}}" class="py-2 text-sm text-neutral-50 px-4 rounded-md bg-blue-500">Create</a> --}}

<a {{$attributes->merge(['class'=>'py-2 text-sm text-neutral-50 px-4 rounded-md bg-'.$type.'-500'])}}>
  {{ $message }}
</a>