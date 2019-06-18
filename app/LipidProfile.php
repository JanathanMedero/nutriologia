<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LipidProfile extends Model
{
    protected $table = 'lipid_profiles';

    protected $guard = [];

    public function Patient()
    {
        return $this->hasOne('App\Patient');
    }
}
