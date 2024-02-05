
<aside id="sidebar" class="fixed z-40 grid grid-rows-[4fr_1fr] text-gray-900 min-h-screen w-[225px] px-6 border-r-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-gray-50">
  <div class="text-sm space-y-4 flex flex-col justify-center">
    <h3 class="uppercase text-gray-900 dark:text-gray-50">Main Menu</h3>
    <nav class="space-y-5 ">
      <ul>
        <li class="flex items-center space-x-2 justify-between 
          
        ">
          <a href="{{route("dashboard.index")}}">

            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('dashboard.index'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-house"></i>
              <p>Dashboard</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("product.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('product.index', 'product.create', 'product.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-boxes-stacked"></i>
              <p>Products</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center space-x-2 justify-between 
          
        ">
          <a href="{{route("category.index")}}">

            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('category.index', 'category.create', 'category.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-list"></i>
              <p>Category</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("customer.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('customer.index', 'customer.create', 'customer.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-users"></i>
              <p>Customers</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("supplier.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('supplier.index', 'supplier.create', 'supplier.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-user"></i>
              <p>Suppliers</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("inbound.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('inbound.index', 'inbound.create', 'inbound.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-people-carry-box"></i>
              <p>inbounds</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("outbound.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('outbound.index', 'outbound.create', 'outbound.edit'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-dolly"></i>
              <p>Outbounds</p>
            </div>
          </a>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <a href="{{route("statistic.index")}}">
            <div class="flex items-center justify-center gap-x-2 text-gray-500 dark:text-gray-300
              @if (Route::is('statistic.index'))
              bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
              @endif
            ">
              <i class="fa-solid fa-chart-line"></i>
              <p>Statistics</p>
            </div>
          </a>
          <x-button-new/>
        </li>
      </ul>

      {{-- <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('category.index', 'category.create', 'category.edit'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-list"></i>
            <a href="{{route("category.index")}}">Categories</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('customer.index', 'customer.create', 'customer.edit'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-users"></i>
            <a href="{{route("customer.index")}}">Customers</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('supplier.index', 'supplier.create', 'supplier.edit'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-user"></i>
            <a href="{{route("supplier.index")}}">Supplier</a>
          </div>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('inbound.index', 'inbound.create', 'inbound.edit'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-people-carry-box"></i>
            <a href="{{route("inbound.index")}}">Inbound</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('outbound.index', 'outbound.create', 'outbound.edit'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-dolly"></i>
            <a href="{{route("outbound.index")}}">Outbound</a>
          </div>
          <x-button-new/>
        </li>
      </ul>

      <ul>
        <li class="flex items-center justify-between">
          <div class="space-x-2 text-gray-500 dark:text-gray-300
            @if (Route::is('statistic.index'))
            bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
            @endif
          ">
            <i class="fa-solid fa-chart-line"></i>
            <a href="{{route("statistic.index")}}">Statistics</a>
          </div>
          <x-button-new/>
        </li>
      </ul> --}}

    </nav>
  </div>

  <div class="space-y-6 text-sm ">
    <h3 class="uppercase text-gray-900 dark:text-gray-50">Others</h3>

    <button class="flex items-center space-x-2 text-gray-500 dark:text-gray-300
      @if (Route::is('profile.edit'))
      bg-gray-200 rounded-md px-2 py-1 dark:bg-gray-700
      @endif
    ">
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

