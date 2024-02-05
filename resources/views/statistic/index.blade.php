<x-app-layout>
    <section class="p-8">
        <div class="flex flex-col lg:grid grid-cols-2 items-center justify-center gap-4">
            <div class="container">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg">
                    {!! $donutChart->container() !!}
                </div>
            </div>
            <script src="{{ $donutChart->cdn() }}"></script>
            {{ $donutChart->script() }}

            <div class="container">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                    {!! $polarAreaChart->container() !!}
                </div>
            </div>
            <script src="{{ $polarAreaChart->cdn() }}"></script>
            {{ $polarAreaChart->script() }}

            <div class="container col-span-2">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                    {!! $areaChart->container() !!}
                </div>
            </div>
            <script src="{{ $areaChart->cdn() }}"></script>
            {{ $areaChart->script() }}

            <div class="container col-span-2">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                    {!! $lineChart->container() !!}
                </div>
            </div>
            <script src="{{ $lineChart->cdn() }}"></script>
            {{ $lineChart->script() }}

            <div class="container col-span-2">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                    {!! $barChart->container() !!}
                </div>
            </div>
            <script src="{{ $barChart->cdn() }}"></script>
            {{ $barChart->script() }}

            {{-- <div class="container col-span-2">
                <div class="p-6 bg-gray-50 rounded-lg border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                    {!! $radarChart->container() !!}
                </div>
            </div>
            <script src="{{ $radarChart->cdn() }}"></script>
            {{ $radarChart->script() }} --}}
        </div>
    </section>
</x-app-layout>