
<aside class="grid grid-rows-[4rem_3fr_1fr] text-gray-900 min-h-screen w-[225px] px-6 border-r border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-gray-50">
  <div class="flex justify-center items-center">
    <h1 class="text-lg uppercase font-medium">Inventory Smart</h1>
  </div>

  <div class="text-sm space-y-4 flex flex-col justify-center">
    <h3 class="uppercase text-gray-900 dark:text-gray-50">Main Menu</h3>
    <nav class="space-y-6 ">
      <ul>
        <li class="flex items-center space-x-2 justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-house"></i>
            <a href="{{route("dashboard.index")}}">Dashboard</a>
          </div>
        </li>
      </ul>
      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-boxes-stacked"></i>
            <a href="{{route("product.index")}}">Products</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-list"></i>
            <a href="{{route("category.index")}}">Categories</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-users"></i>
            <a href="{{route("customer.index")}}">Customers</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-user"></i>
            <a href="{{route("supplier.index")}}">Supplier</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-people-carry-box"></i>
            <a href="{{route("inbound.index")}}">Inbound</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-dolly"></i>
            <a href="{{route("outbound.index")}}">Outbound</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300">
            <i class="fa-solid fa-chart-line"></i>
            <a href="{{route("statistic.index")}}">Statistics</a>
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