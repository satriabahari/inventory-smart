@props(['chart'])

<div {{$attributes->merge(['class'=>"container "])}} >
  <div class="p-6 bg-gray-50 rounded-lg">
      {!! $chart->container() !!}
  </div>
</div>
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
