<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use RuntimeException;
use App\Dorm;
use App\Student;

class Unit extends Model
{
    protected $table= "units";
    protected $primaryKey= "unit_id";
    protected $fillable= ['dorm_id'];
    public $timestamps= false;


    /*
    * Assign a student to this unit
    *  Gender: The students in a unit must all have the same gender.
    *     If the unit has a gender assigned, the student's gender MUST match.
    *     If this is the fist student assigned, the unit is set to the student's gender.
    *
    *  Capacity: Max capacity for a unit is 8 students (2 students / room)
    *
    *  @return If sucessful, return the updated instance of the unit.
    *          If not successful, throw LengthException
    */
    public function assignStudent(Student $student){
      //throw an exception if the unit is already full
      if($this->students->count() > 7){
        throw new RuntimeException( 'max capacity');
        return false;
      }

      //throw an exception if the unit and student genders don't match
      if( !is_null($this->gender) && $this->gender !== $student->gender ){
        throw new RuntimeException( 'mixed gender');
        return false;
      }

      //if the unit is empty, set the unit's gender to match the first student
      if( is_null($this->gender) ){
        $this->gender= $student->gender;
        $this->save();
      }

      //save the relationship which assigns the student to this unit.
      $this->students()->save($student);

      return $this; //return the updated unit
    }


    /*
    * Display the name of the unit
    * @param withDorm - include the dorm's initials in addition to the unit number
    *     ex: withDorm: ST-2    
    * @return string
    */
    public function name($withDorm= false){
      if( $withDorm ){
        $name= $this->dorm()->first()->abrv()."-";
      }
      else {
        $name= 'Unit #';
      }
      return $name.$this->unit_id;
    }


    /************** relationships ****************/
    /*
    * The dorm this unit belongs to
    * @return instance of App\Dorm
    */
    public function dorm(){
      return $this->belongsTo('App\Dorm', 'dorm_id', 'dorm_id');
    }

    /*
    * The students belonging to this unit
    * @return Collection of App\Student
    */
    public function students(){
      return $this->hasMany('App\Student', 'unit_id');
    }

}
