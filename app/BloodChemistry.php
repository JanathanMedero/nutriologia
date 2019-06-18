<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodChemistry extends Model
{
    protected $table = 'blood_chemistries';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
