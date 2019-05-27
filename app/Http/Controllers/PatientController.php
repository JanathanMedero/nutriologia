<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Patient;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $patients = Patient::where('user_id', $user->id)->get();

        return view('patients.index', compact('user', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('patients.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $user = Auth::user();

        // Calculamos la edad y damos formato a la fecha de nacimiento
        $birthdate = $request->birthdate;
        $birthdate_format = Str::replaceArray('/', ['-', '-'], $birthdate);
        $ages = Carbon::parse($birthdate_format)->age;
        $birthdate_format = date('Y-m-d H:i:s');

        Patient::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'picture' => 'default.png',
            'address' => $request->address,
            'city' => $request->city,
            'birthdate' => $birthdate_format,
            'age' => $ages,
            'phone_1' => $request->phone_1,
            'phone_2' => $request->phone_2,
            'email' => $request->email,
            'gender' => $request->gender,
            'trimester' => $request->trimester,
            'semester' => $request->semester,
            'sdg' => $request->sdg,
            'weight' => $request->weight,
            'size' => $request->size,
            'notes' => $request->notes,
        ]);

        return redirect()->route('patients.index')->with('success', 'Paciente registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
