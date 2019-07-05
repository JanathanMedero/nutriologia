<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['group_id', 'name', 'icon'];

    public function FoodGroup()
    {
    	return $this->belongsTo('App\FoodGroup', 'group_id');
    }
}
