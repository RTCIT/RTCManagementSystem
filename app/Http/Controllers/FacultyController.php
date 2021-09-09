<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        
	return view('Faculty/FacultyDashboard');	
    }

    public function changePassword()
    {
        
	return view('Public/ChangePassword');	
    }
}
