{{-- <button x-on:click="darkMode = !darkMode" class="text-gray-500 dark:text-gray-300">
  <i class="fa-solid @if ($darkMode) fa-sun @else fa-moon @endif"></i>
</button> --}}

<button x-on:click="darkMode = !darkMode" class="text-gray-500 dark:text-gray-300">
  <i class="fa-solid fa-lg lg:fa-xl" x-bind:class="{ 'fa-sun': darkMode, 'fa-moon': !darkMode }"></i>
</button>

