<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay;

class OpenPayController extends Controller
{
	public function __construct()
	{
		$this->id = env('OPEN_PAY_ID');
		$this->secret = env('OPEN_PAY_SECRET');
	}

	public function store(Request $request){
		Openpay::setSandboxMode(true);
			$openpay = Openpay::getInstance($this->id, $this->secret);

		dd($request);

    	//Registramos el cliente
		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($data['password']),
		]);
	}
}
