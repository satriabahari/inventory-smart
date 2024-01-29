<aside class="flex flex-col justify-between text-neutral-900 min-h-screen p-4 border-r border-gray-700 bg-gray-100 dark:bg-gray-800 dark:text-neutral-50">
  <div>
    <h1 class="text-lg">Study Club</h1>
  </div>

  <div>
    <nav class="space-y-4">
      <ul>
        <li>
          <a href="{{route("dashboard")}}">Dashboard</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="">User</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="{{route("product.index")}}">Product</a>
        </li>
      </ul>
    </nav>
  </div>

  <div>
    <button>Logout</button>
  </div>
</aside>