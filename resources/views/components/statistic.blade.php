@props(['title', 'count', 'color', 'icon', 'iconColor'])

<div class="bg-gray-50 rounded-lg w-full p-2 dark:bg-gray-800 border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
  {{-- <div class="grid grid-cols-2"> --}}
    <div class="flex justify-between">
      {{-- <div class="w-fit h-fit rounded-full bg-gray-300 dark:bg-gray-500">
        <i class="fa-solid fa-users text-xs"></i>
      </div> --}}
      <div class="flex items-center ml-2">
        <i class="fa-solid {{$icon}} text-gray-500 dark:text-gray-300 fa-2xl"></i>
      </div>
      <div class="flex flex-col items-end ">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-50">{{$title}}</h3>
        <h5 class="text-xl font-semibold text-gray-900 dark:text-gray-50">{{$count}}</h5>
      </div>
    </div>
    <div class="flex justify-between gap-x-4">
      <div class="flex space-x-1 items-end">
        <span class="w-1.5 h-4 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-6 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-8 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-5 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-7 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-6 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-4 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-10 rounded-t-full {{$color}}"></span>
        <span class="w-1.5 h-5 rounded-t-full {{$color}}"></span>
      </div>
      <div class="flex space-x-2 items-end">
        {{-- <div class="h-fit w-fit p-2 rounded-full border border-gray-500 dark:border-gray-300">
          <i class="fa-solid fa-arrow-up"></i>
        </div> --}}
        <div class="{{$iconColor}}">
          <i class="fa-solid fa-circle-arrow-up fa-lg"></i>
        </div>
        <h5 class="text-xs text-gray-500 dark:text-gray-300">85% (30 days)</h5>
      </div>
    </div>
  {{-- </div> --}}
</div>