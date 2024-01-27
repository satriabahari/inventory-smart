<aside class="flex flex-col justify-between h-screen py-4 px-8 bg-neutral-200">
  <div>
    <h1 class="text-2xl font-medium">Study Club</h1>
  </div>

  <nav class="space-y-4">
    <h5 class="text-neutral-500">Menu</h5>
    <ul class="text-neutral-900 space-y-2">
      <li class="bg-neutral-300 py-2 px-4 rounded-md">Dashboard</li>
      <li class="bg-neutral-300 py-2 px-4 rounded-md">
        <a href="{{route("stock.index")}}">Product</a>
      </li>
      <li class="bg-neutral-300 py-2 px-4 rounded-md">
        <a href="{{route("user.index")}}">User</a>
      </li>
      <li class="bg-neutral-300 py-2 px-4 rounded-md">Category</li>
      <li class="bg-neutral-300 py-2 px-4 rounded-md">Chats</li>
    </ul>
  </nav>

  <div class="space-y-4">
    <h5 class="text-neutral-500">Others</h5>
    <div class="flex flex-col space-y-2">
      <button class="bg-neutral-300 py-2 px-4 rounded-md">
        <a href="{{route("stock.index")}}">Setings</a>
      </button>
      <button class="bg-neutral-300 py-2 px-4 rounded-md">
        <a href="{{route("stock.index")}}">Logout</a>
      </button>
    </div>
  </div>
</aside>