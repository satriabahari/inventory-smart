<x-app-layout>
  <section class="p-8">
    <div class="grid grid-cols-2 items-center justify-center gap-4">
      <div class="container">
        <div class="p-6 bg-gray-50 rounded-lg">
            {!! $donutChart->container() !!}
        </div>
      </div>
      <script src="{{ $donutChart->cdn() }}"></script>
      {{ $donutChart->script() }}

      <div class="container">
          <div class="p-6 bg-gray-50 rounded-lg">
              {!! $polarAreaChart->container() !!}
          </div>
      </div>
      <script src="{{ $polarAreaChart->cdn() }}"></script>
      {{ $polarAreaChart->script() }}

      <div class="container col-span-2">
          <div class="p-6 bg-gray-50 rounded-lg">
              {!! $lineChart->container() !!}
          </div>
      </div>
      <script src="{{ $lineChart->cdn() }}"></script>
      {{ $lineChart->script() }}
    </div>
  </section>
</x-app-layout>