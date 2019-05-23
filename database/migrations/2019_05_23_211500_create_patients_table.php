<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('picture')->default('default.png');
            $table->string('address');
            $table->string('city');
            $table->date('birthdate');
            $table->integer('age');
            $table->integer('phone_1');
            $table->integer('phone_2');
            $table->integer('email');
            $table->boolean('gender');
            $table->integer('pregnancy')->nullable();
            $table->integer('lactation')->nullable();
            $table->double('weight', 8,2);
            $table->double('size', 3,1);
            $table->text('notes');
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
        Schema::dropIfExists('patients');
    }
}
