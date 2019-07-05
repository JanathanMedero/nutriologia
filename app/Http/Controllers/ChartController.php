<?php

namespace App\Http\Controllers;

use App\Patient;
use Auth;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function show($slug)
    {
    	$user = Auth::user();

    	$patient = Patient::where('slug', $slug)->first();

    	return view('patients.Charts.show', compact('user', 'patient'));
    }
}
