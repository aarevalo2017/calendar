<?php

use Illuminate\Database\Seeder;

class CitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('citas')->delete();
        $data = 
        [
            [
            	'title' => 'Juan', 
            	'start_date' => '2018-04-26 13:00', 
            	'end_date' => '2017-09-15 13:30'
            ],
            [
            	'title' => 'Pedro', 
            	'start_date' => '2018-04-26 15:00', 
            	'end_date' => '2017-09-15 15:30'
            ],
            [
            	'title' => 'Andres', 
            	'start_date' => '2018-04-26 17:00', 
            	'end_date' => '2017-09-15 17:30'
            ],
            [
            	'title' => 'Raul', 
            	'start_date' => '2018-04-26 19:00', 
            	'end_date' => '2017-09-15 19:30'
            ],
        ];
        \DB::table('citas')->insert($data);
    }
}
