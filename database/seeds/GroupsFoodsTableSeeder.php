<?php

use App\FoodGroup;
use Illuminate\Database\Seeder;

class GroupsFoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodGroup::create([
        	'name' => 'Verduras'
        ]);

        FoodGroup::create([
        	'name' => 'Carnes Frias'
        ]);

        FoodGroup::create([
        	'name' => 'Tuberculos'
        ]);

        FoodGroup::create([
        	'name' => 'Frutas'
        ]);

        FoodGroup::create([
        	'name' => 'Leguminosas'
        ]);
    }
}
