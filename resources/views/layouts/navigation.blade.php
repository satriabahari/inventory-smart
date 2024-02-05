<nav x-data="{ open: false }" class="fixed z-50 w-full bg-gray-50 dark:bg-gray-800 border-b-2 border-gray-200 dark:border-gray-700">
    <span id="toggleSidebar" class="cursor-pointer absolute bg-gray-50 dark:bg-gray-800 dark:border-gray-700 border-b-2 border-r-2 border-gray-300 w-5 h-5 left-5 top-[87%] rotate-45"></span>
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <h1 class="text-sm lg:text-lg uppercase font-medium text-gray-900 dark:text-gray-50">Inventory Smart</h1>
            </div>

            <div class="flex items-center gap-4 lg:gap-x-8">
                <x-search/>
                <x-button-mode />
                <h3 class="text-sm lg:text-lg text-gray-900 dark:text-gray-50">{{ Auth::user()->name }}</h3>
            </div>
        </div>
    </div>
</nav>
