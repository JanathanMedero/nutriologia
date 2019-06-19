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
        $user = Auth::user();

        $patient = Patient::where('slug', $slug)->first();

        VitalSign::create([
            'patient_id' => $patient->id,
            'PAS' => $request->PAS,
            'breathing_frequency' => $request->breathing_frequency,
            'body_temperature' => $request->body_temperature,
            'beats_per_minute' => $request->beats_per_minute
        ]);
        return redirect()->route('ClinicHistoryPatient', $patient->slug)->with('success', 'Datos guardados correctamente');
    }

    public function edit($slug)
    {
        $user = Auth::user();

        $patient = Patient::where('slug', $slug)->first();

        return view('patients.VitalSigns.edit', compact('user', 'patient'));
    }

    public function update(Request $request, $slug)
    {
        $patient = Patient::where('slug', $slug)->first();

        VitalSign::where('patient_id', $patient->id)->update([
            'patient_id' => $patient->id,
            'PAS' => $request->PAS,
            'breathing_frequency' => $request->breathing_frequency,
            'body_temperature' => $request->body_temperature,
            'beats_per_minute' => $request->beats_per_minute
        ]);
        return redirect()->route('ClinicHistoryPatient', $patient->slug)->with('success', 'Datos guardados correctamente');
    }
}
