<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
        	'nombre'=> 'Noticia Local',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
         DB::table('categorias')->insert([
        	'nombre'=> 'Deportes',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
          DB::table('categorias')->insert([
        	'nombre'=> 'Salud',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
           DB::table('categorias')->insert([
        	'nombre'=> 'Policial',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
