<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <section class="p-8">
        <div class="grid grid-cols-4 items-center justify-center gap-4">
            <x-statistic title="Customers" count="{{$customers->count()}}" color="bg-blue-500" icon="fa-circle-user" iconColor="text-blue-500"/>
            <x-statistic title="Products" count="{{$products->count()}}" color="bg-red-500" icon="fa-solid fa-box" iconColor="text-red-500"/>
            <x-statistic title="Users" count="{{$users->count()}}" color="bg-green-500" icon="fa-circle-user" iconColor="text-green-500"/>
            <x-statistic title="Cattegory" count="{{$cattegories->count()}}" color="bg-indigo-500" icon="fa-circle-user" iconColor="text-indigo-500"/>
            
            <div class="col-span-2 container">
                <div class="p-6 bg-gray-50 rounded-lg">
                    {!! $productChart->container() !!}
                </div>
            </div>
            <script src="{{ $productChart->cdn() }}"></script>
            {{ $productChart->script() }}

            <div class="col-span-2 container">
                <div class="p-6 bg-gray-50 rounded-lg">
                    {!! $statsChart->container() !!}
                </div>
            </div>
            <script src="{{ $statsChart->cdn() }}"></script>
            {{ $statsChart->script() }}
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
