<?php

use Illuminate\Database\Seeder;
use App\Noticia;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CategoriasSeeder::class);
        factory(Noticia::class)->times(56)->create();
    }
}
