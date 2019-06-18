<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThyroidProfile extends Model
{
    protected $table = 'thyroid_profiles';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
