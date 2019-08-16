<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    protected $units;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->units= App\Unit::all();

        factory(App\Student::class, 150)->create()->each( function ($student){

          $assigning= true;
          $count=0;

          while( $assigning && $count < 10) {
            $randomUnit= $this->units[ mt_rand(0, $this->units->count() - 1) ];

            try {
              $randomUnit->assignStudent($student);
              $assigning= false;
            }
            catch(RuntimeException $ex){
              $count++;
            }
          }

          usleep(1000);
        });
    }
}
