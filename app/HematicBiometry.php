<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HematicBiometry extends Model
{
    protected $table = 'hematic_biometries';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
