<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = ['name', 'slug', 'user_id', 'address', 'city', 'birthdate', 'age',
	'phone_1', 'phone_2', 'email', 'gender', 'trimester',
	'semester', 'sdg', 'weight', 'size', 'notes'
];

	public function user()
	    {
	        return $this->belongsTo('App\User');
	    }
	public function events()
	    {
	        return $this->hasMany('App\Event');
	    }

	public function Brief_clinical_history()
	    {
	        return $this->hasOne('App\Brief_clinical_history');
	    }
	public function heredfamily_background()
		{
			return $this->hasOne('App\heredfamily_background');
		}
	public function Toxic_habit()
		{
		return $this->hasOne('App\Toxic_habit', 'patient_id');
		}
		public function BloodChemistry()
		{
			return $this->hasOne('App\BloodChemistry');
		}
		public function HematicBiometry()
		{
			return $this->hasOne('App\HematicBiometry');
		}
		public function VitaminMineral()
		{
			return $this->hasOne('App\VitaminMineral');
		}
		public function LipidProfile()
		{
			return $this->hasOne('App\LipidProfile');
		}

		public function ThyroidProfile()
		{
			return $this->hasOne('App\ThyroidProfile');
		}

		public function Urine()
		{
			return $this->hasOne('App\Urine');
		}
		public function UrineTest()
		{
			return $this->hasOne('App\UrineTest');
		}
		public function VitalSign()
		{
			return $this->hasOne('App\VitalSign');
		}
}
