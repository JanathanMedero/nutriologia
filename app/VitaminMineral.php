<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitaminMineral extends Model
{
    protected $table = 'vitamin_minerals';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
