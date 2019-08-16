@extends('container')

@section('content')
<div class="main">
  @foreach($dorms as $dorm)
    <div class="dorm">
      <a href="{{ route('dorm-details', $dorm)}}"><h2>{{ $dorm->name }}</h2></a>

    </div>
  @endforeach
</div>
@endsection
