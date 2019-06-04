<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Illuminate\Http\Request;

class NutritionistController extends Controller
{
    function __construct(){
        $this->middleware('roles:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $nutritionists = User::where('slug' ,'!=', $user->slug)->get();

        return view('nutritionist.index', compact('user', 'nutritionists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $slug)
    {
        $nutriologist = User::where('slug', $slug)->first();

        if($nutriologist->status === 0){
            $nutriologist->status = 1;
            $nutriologist->save();
            return back()->with('success', 'Cuenta activada');
        }else{
            $nutriologist->status === 1;
            $nutriologist->status = 0;
            $nutriologist->save();
            return back()->with('info', 'Cuenta suspendida');
        }
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
