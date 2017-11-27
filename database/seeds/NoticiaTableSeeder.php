<?php

use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert(
            //*[
            	/*'titular' => 'Banda El poder de la amistad, cae ante la justicia',
            	'entrada' => 'Operativo duró 6 meses',
            	'cuerpo' => 'La banda criminal más buscada de los últimos años, fue atrapada robando computadores gamer en una de las tiendas más grandes de tecnología',
            	'imagen' => 'http://lorempixel.com/600/338?1',
            	'created_at' => '2017-11-25',
            	'categoria_id' => '1',
            	'usuario_id' => '1',
        	],*/[
                'titular' => '¡Deportes Temuco a la Sudamericana!',
                'entrada' => 'EL indio pije se hará sentir con fuerza esta nueva edición',
                'cuerpo' => 'Luego de una agónica victoria del cuadro albiverde por 1 a 0 frente a la Unión Española, logró clasificar por primera vez en su historia a uno de los torneos más importantes del fútbol sudamericano',
                'imagen' => 'http://lorempixel.com/600/338?2',
                'created_at' => '2017-11-25',
                'categoria_id' => '2',
                'usuario_id' => '1',
            ]
        );
    }
}
