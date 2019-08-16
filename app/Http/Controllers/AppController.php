<?php
/* AppController is used to handle viewing pages.
   Logic to create, update, and delete resources should
   be handled in the appropriate controller for each resource.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dorm;
use App\Unit;
use App\Student;

class AppController extends Controller
{
    /* display the main home page with an array of all Dorms
     */
    public function index(){
      $dorms = Dorm::all();

      return view('main', compact('dorms'));
    }

    /* display the Dorm details page, which includes the
     *  unit floorplans
     */
    public function dorm(Dorm $dorm){
      return view('dorm', compact('dorm'));
    }

    /* display the details to view an inividual student
     */
    public function student(Student $student){
      return view('student', compact('student'));
    }

    public function update_student(Request $request, Student $student){

        return view('student', compact('student'));
    }
}
