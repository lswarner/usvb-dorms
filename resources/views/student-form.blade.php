{!! Form:: model($student, ['action'=>['AppController@update_student', $student->id], 'method' => 'patch', 'class'=>'form-horizontal']) !!}
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}"/>
  </div>
  <div class="form-group">
    <label>Gender:</label>
    <input type="text" name="gender" value="{{ $student->gender }}"/>
  </div>
  <div class="form-group">
    <button type="submit">Update</button>
  </div>
{!! Form::close() !!}
