<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodTableSeeder extends Seeder
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
        	'image' => 'coffe.png'
        ]);

        Food::create([
        	'name' => 'Refresco',
        	'image' => 'soda.png'
        ]);

        Food::create([
        	'name' => 'Tacos',
        	'image' => 'taco.png'
        ]);

        Food::create([
        	'name' => 'Pan Dulce',
        	'image' => 'bread.png'
        ]);

        Food::create([
        	'name' => 'Cerveza',
        	'image' => 'beer.png'
        ]);

        Food::create([
        	'name' => 'Pizza',
        	'image' => 'pizza.png'
        ]);

        Food::create([
        	'name' => 'Comida Rapida',
        	'image' => 'hot_dog.png'
        ]);

        Food::create([
        	'name' => 'Nieve',
        	'image' => 'frozen_food.png'
        ]);

        Food::create([
        	'name' => 'Galletas',
        	'image' => 'cookies.png'
        ]);

        Food::create([
        	'name' => 'Chocolate',
        	'image' => 'chocolate.png'
        ]);

        Food::create([
        	'name' => 'Pan de Caja',
        	'image' => 'bread_box.png'
        ]);

        Food::create([
        	'name' => 'Restaurante',
        	'image' => 'restaurant.png'
        ]);
    }
}
