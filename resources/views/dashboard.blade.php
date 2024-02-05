<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <section class="p-4 lg:p-8">
        <div class="flex flex-col lg:grid grid-cols-4 items-center justify-center gap-4">
            <x-statistic title="Products" count="{{$products->count()}}" color="bg-blue-500" icon="fa-solid fa-box" iconColor="text-blue-500"/>
            <x-statistic title="Categories" count="{{$categories->count()}}" color="bg-green-500" icon="fa-list" iconColor="text-green-500"/>
            <x-statistic title="Customers" count="{{$customers->count()}}" color="bg-red-500" icon="fa-users" iconColor="text-red-500"/>
            <x-statistic title="Suppliers" count="{{$suppliers->count()}}" color="bg-yellow-500" icon="fa-user" iconColor="text-yellow-500"/>
            
            <div class="col-span-2 container border-2 border-gray-200 drop-shadow-lg rounded-lg dark:border-gray-700">
                <div class="p-6 bg-gray-50 rounded-lg">
                    {!! $donutChart->container() !!}
                </div>
            </div>
            <script src="{{ $donutChart->cdn() }}"></script>
            {{ $donutChart->script() }}

            <div class="col-span-2 container border-2 border-gray-200 drop-shadow-lg rounded-lg dark:border-gray-700">
                <div class="p-6 bg-gray-50 rounded-lg">
                    {!! $polarAreaChart->container() !!}
                </div>
            </div>
            <script src="{{ $polarAreaChart->cdn() }}"></script>
            {{ $polarAreaChart->script() }}
        </div>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
