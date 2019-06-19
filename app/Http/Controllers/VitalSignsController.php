<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Patient;
use App\VitalSign;

class VitalSignsController extends Controller
{
    public function create($slug)
    {
        $user = Auth::user();

        $patient = Patient::where('slug', $slug)->first();

        return view('patients.VitalSigns.create', compact('user', 'patient'));
    }

    public function store(Request $request, $slug)
    {
        //
    }
}
