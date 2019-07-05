<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodGroup extends Model
{
    protected $table = 'foods_groups';

    protected $fillable = ['name'];

    public function Food()
    {
    	return $this->hasMany('App\Food');
    }

    public function FrequencyConsumption()
    {
    	return $this->hasMany('App\FrequencyConsumption');
    }
}
