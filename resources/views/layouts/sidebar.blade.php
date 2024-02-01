<aside class="grid grid-rows-[4rem_3fr_1fr] text-gray-900 min-h-screen w-[225px] px-6 border-r border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-gray-50">
  <div class="flex justify-center items-center">
    <h1 class="text-2xl uppercase">Study Club</h1>
  </div>

  <div class="text-sm space-y-4 flex flex-col justify-center">
    <h3 class="uppercase text-gray-900 dark:text-gray-50">Menu</h3>
    <nav class="space-y-6 ">
      <ul>
        <li class="flex items-center space-x-2 justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-brands fa-microsoft"></i>
            <a href="{{route("dashboard")}}">Dashboard</a>
          </div>
        </li>
      </ul>
      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-boxes-stacked"></i>
            <a href="{{route("product.index")}}">Product</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-boxes-stacked"></i>
            <a href="{{route("product_masuk.index")}}">Product Masuk</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-boxes-stacked"></i>
            <a href="{{route("product_keluar.index")}}">Product Keluar</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-user"></i>
            <a href="{{route("customer.index")}}">Customer</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-user"></i>
            <a href="{{route("supplier.index")}}">Supplier</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-list"></i>
            <a href="{{route("cattegory.index")}}">Cattegory</a>
          </div>
          <x-button-new/>
        </li>
      </ul>
    </nav>
  </div>

  <div class="space-y-6 text-sm ">
    <h3 class="uppercase text-gray-900 dark:text-gray-50">Others</h3>

    <button class="flex items-center space-x-2 text-gray-500 dark:text-gray-300">
      {{-- <x-bi-gear class="w-4 h-4 text-gray-50"/> --}}
      <i class="fa-solid fa-gear"></i>
      <a href="{{route("profile.edit")}}">Setting</a>
    </button>
    
    <form method="POST" action="{{ route('logout') }}" class="flex items-center text-gray-500 dark:text-gray-300">
      @csrf
      <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
      <a href="{{route("logout")}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
    </form>
  </div>
</aside>