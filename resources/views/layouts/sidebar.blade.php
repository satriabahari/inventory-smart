<aside class="flex flex-col justify-between text-neutral-900 min-h-screen w-[250px] py-4 px-6 border-r border-gray-700 bg-gray-100 dark:bg-gray-800 dark:text-neutral-50">
  <div>
    <h1 class="text-2xl uppercase">Study Club</h1>
  </div>

  <div class="text-sm space-y-4">
    <h3 class="uppercase">Menu</h3>
    <nav class="space-y-6 ">
      <ul>
        <li class="flex items-center space-x-2 justify-between">
          <div class="space-x-2 text-gray-300">
            <i class="fa-brands fa-microsoft"></i>
            <a href="{{route("dashboard")}}">Dashboard</a>
          </div>
        </li>
      </ul>
      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-300">
            <i class="fa-solid fa-user"></i>
            <a href="">User</a>
          </div>
          <x-button-new/>
        </li>
      </ul>
      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-300">
            <i class="fa-solid fa-boxes-stacked"></i>
            <a href="{{route("product.index")}}">Product</a>
          </div>
          <x-button-new/>
        </li>
      </ul>
    </nav>
  </div>

  <div class="space-y-6 text-sm ">
    <h3 class="uppercase">Others</h3>

    <button class="flex items-center space-x-2 text-gray-300">
      {{-- <x-bi-gear class="w-4 h-4 text-gray-50"/> --}}
      <i class="fa-solid fa-gear"></i>
      <a href="{{route("profile.edit")}}">Setting</a>
    </button>
    
    <form method="POST" action="{{ route('logout') }}" class="flex items-center text-gray-300">
      @csrf
      <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
      <a href="{{route("logout")}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
    </form>
  </div>
</aside>