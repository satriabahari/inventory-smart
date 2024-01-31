<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-x-4">
            <x-statistic title="Customers" count="75" color="blue" icon="fa-circle-user" />
            <x-statistic title="Products" count="60" color="red" icon="fa-solid fa-box" />
            <x-statistic title="Users" count="80" color="green" icon="fa-circle-user" />
            <x-statistic title="Cattegory" count="4" color="blue" icon="fa-circle-user" />
        </div>
        <div class="container px-4 mx-auto">

            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        
        </div>
        
        <script src="{{ $chart->cdn() }}"></script>
        
        {{ $chart->script() }}
    </div>
</x-app-layout>
