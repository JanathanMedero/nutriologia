<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrineTest extends Model
{
    protected $table = 'urine_tests';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
