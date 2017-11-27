<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
        	array('descripcion' => 'Policial'),
            array('descripcion' => 'Deportes'),
            array('descripcion' => 'Farandula'),
            array('descripcion' => 'Tecnología'),
        ]);
    }
}
