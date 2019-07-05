<?php

use App\Food;
use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
        	'name' => 'Café',
        	'group_id' => 2,
        ]);

        Food::create([
        	'name' => 'Refresco',
        	'group_id' => 1,
        ]);

        Food::create([
        	'name' => 'Tacos',
        	'group_id' => 4,
        ]);

        Food::create([
        	'name' => 'Pan Dulce',
        	'group_id' => 2,
        ]);

        Food::create([
        	'name' => 'Cerveza',
        	'group_id' => 5,
        ]);

        Food::create([
        	'name' => 'Pizza',
        	'group_id' => 3,
        ]);

        Food::create([
        	'name' => 'Comida Rapida',
        	'group_id' => 1,
        ]);

        Food::create([
        	'name' => 'Nieve',
        	'group_id' => 3,
        ]);

        Food::create([
        	'name' => 'Galletas',
        	'group_id' => 2,
        ]);

        Food::create([
        	'name' => 'Chocolate',
        	'group_id' => 5,
        ]);

        Food::create([
        	'name' => 'Pan de Caja',
        	'group_id' => 4,
        ]);

        Food::create([
        	'name' => 'Restaurante',
        	'group_id' => 3,
        ]);
    }
}
