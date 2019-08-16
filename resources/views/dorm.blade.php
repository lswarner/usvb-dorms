@extends('container')

@section('scripts')
<script src="{{ asset('/js/usvb.js') }}" ></script>
@endsection

@section('content')
  <div class="dorm-main">
    <div>
      <h2 class="dorm-name">{{ $dorm->name }}</h2>
      <h3 id="unit-name"></h3>
      <div id="students"></div>
    </div>

    <div class="dorm-layout">

      @foreach($dorm->units as $unit)

        @component('unit', ['unit' => $unit])
        @endcomponent

      @endforeach
    </div>

</div>
@endsection
