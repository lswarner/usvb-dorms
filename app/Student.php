<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;

class Student extends Model
{
    protected $table= "students";
    protected $primaryKey= "student_id";
    protected $fillable= ['name', 'address', 'gender', 'dob', 'phone', 'unit_id'];
    public $timestamps= false;


    /*
    * The unit this student is assigned to
    * @return instance of App\Unit
    */
    public function unit(){
      return $this->belongsTo('App\Unit', 'unit_id', 'unit_id');
    }

    /*
    * A string to display the student's Dorm and Unit
    *   @param $abbreviated specifed using the Dorm's abbreviated initials
                instead of full name
    *           ex: TH-005 for Tecumseh Hall's Unit 5
    * @return string
    */
    public function room($abbreviated= false){
      return $this->unit->dorm->name.' #'.$this->unit->unit_id;
    }
}
