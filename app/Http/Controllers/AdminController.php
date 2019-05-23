<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function Dashboard(){

    	$user = Auth::user();

    	return view('admin.dashboard', compact('user'));
    }
}
