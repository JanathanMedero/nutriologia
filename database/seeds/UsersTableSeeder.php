<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Juan Carlos Medina',
        	'slug' => Str::slug('Juan Carlos Medina', '-').Str::uuid(),
        	'picture' => 'default.png',
        	'role' => 'admin',
        	'email' => 'JuanCarlosMedina2019@gmail.com',
        	'confirmed' => 0,
        	'no_registry' => '452252220215',
        	'identification_card' => '5482125200212',
        	'password' => bcrypt('secret'),
        ]);

        User::create([
        	'name' => 'Roberto Medina',
        	'slug' => Str::slug('Juan Carlos Medina', '-').Str::uuid(),
        	'picture' => 'default.png',
        	'role' => 'user',
        	'email' => 'RobertoMedina2019@gmail.com',
        	'confirmed' => 0,
        	'no_registry' => '452252220215',
        	'identification_card' => '5482125200212',
        	'password' => bcrypt('secret'),
        ]);
    }
}
