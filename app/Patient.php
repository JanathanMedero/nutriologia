<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = ['name', 'user_id', 'address', 'city', 'birthdate', 'age',
	'phone_1', 'phone_2', 'email', 'gender', 'trimester',
	'semester', 'sdg', 'weight', 'size', 'notes'
];

public function user()
    {
        return $this->belongsTo('App\User');
    }


}
