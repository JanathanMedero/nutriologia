<?php

namespace App\Http\Controllers;

use App\Food;
use App\Patient;
use Auth;
use Illuminate\Http\Request;

class NutritionalClinicalHistoryController extends Controller
{
    public function create($slug)
    {
    	$patient = Patient::where('slug', $slug)->first();

    	$user = Auth::user();

    	$foods = Food::all();

    	return view('patients.NutritionalClinicalHistory.create', compact('patient', 'user', 'foods'));
    }
}
