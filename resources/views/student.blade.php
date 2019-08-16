@extends('container')


@section('content')
  <div class="student-main">
    <div>
      <h2>{{ $student->name }}</h2>
      <h3>Student ID: <span class="student-id">#0000{{ $student->student_id}}</span></h3>
      <h3>Gender: <span class="{{$student->gender}}">{{ ucfirst($student->gender) }}</span></h3>
      <h3>Room Assignment: <span class="student-unit">{{$student->room()}}</span></h3>
    </div>


</div>
@endsection
