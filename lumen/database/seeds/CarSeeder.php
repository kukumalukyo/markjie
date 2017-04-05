<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('cars')->delete();
        for ($i=0;$i<10; $i++) {
            \App\Car::create([
               'make'=>'make'.$i,
                'model'=>'model'.$i,
                'year'=>'year'.$i
            ]);
        }
    }
}
