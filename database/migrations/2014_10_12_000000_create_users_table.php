<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('picture')->default('default.png');
            $table->string('role')->default('user');
            $table->string('email')->unique();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->string('no_registry');
            $table->string('identification_card');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
