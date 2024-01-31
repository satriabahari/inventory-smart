@props(['route', 'text', 'color', 'icon'])

@if(isset($route))
  <a href="{{ $route }}" class="flex justify-center items-center gap-x-2 py-2 text-sm text-neutral-50 px-4 rounded-md bg-{{ $color }}-500">
    <i class="fa-solid {{ $icon }}"></i>
    <p>{{ $text }}</p>
  </a>
@else
  <div class="flex justify-center items-center gap-x-2 py-2 text-sm text-neutral-50 px-4 rounded-md bg-{{ $color }}-500">
    <i class="fa-solid {{ $icon }}"></i>
    <p>{{ $text }}</p>
  </div>
@endif
