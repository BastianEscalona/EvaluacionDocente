<?php

use Illuminate\Database\Seeder;

class ComisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comisions')->insert([
            'nombre' => 'Comision Evaluadora 1',

        ]);
        DB::table('comisions')->insert([
            'nombre' => 'Comision Evaluadora 2',

        ]);
        
    }
}
