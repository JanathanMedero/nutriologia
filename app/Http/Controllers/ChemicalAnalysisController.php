<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Patient;

class ChemicalAnalysisController extends Controller
{
    public function create($slug)
    {
        $user = Auth::user();

        $patient = Patient::where('slug', $slug)->first();

        return view('patients.ChemicalAnalysis.create', compact('user', 'patient'));
    }
}
