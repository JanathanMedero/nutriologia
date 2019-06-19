<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    protected $table = 'vital_signs';

    protected $guard = [];

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
}
