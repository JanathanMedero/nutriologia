<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urine extends Model
{
    protected $table = 'urines';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
