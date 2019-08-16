<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;

class Dorm extends Model
{
    protected $table= "dorms";
    protected $primaryKey= "dorm_id";
    protected $fillable= ['name'];
    public $timestamps= false;

    /*
     Display an abbreviated name of the dorm based on
        the first letter of each word in the name
        ex: Tecumseh Hall is TH
      use this function to display the name of a unit,
        ex: TH-20

      @return string
    */
    public function abrv() {
      $abrv= '';
      foreach(explode(' ',$this->name) as $w){
        $abrv.= substr($w, 0, 1);
      }
      return $abrv;
    }

    /*
    * The units belonging to this dorm
    * @return Collection of App\Unit
    */
    public function units(){
      return $this->hasMany('App\Unit', 'dorm_id');
    }

    /*
    * The students belonging to this dorm
    * @return Collection of App\Student
    */
    public function students(){
      return $this->hasManyThrough('App\Student', 'App\Unit', 'dorm_id', 'unit_id');
    }
}
