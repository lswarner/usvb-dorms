<div class="units">
  <h3>{{$slot}}</h3>
  @foreach($units as $unit)
    <div class="unit-id">{{$unit->name(true)}}</div>
    @foreach($unit->students as $student)
      <div class="student">
        <span class="student-name">{{ $student->name }}</span> #{{ $student->student_id }}
      </div>
    @endforeach
  @endforeach
</div>
