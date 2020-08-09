<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('auth');
    }

    public function auth()
    {
        
    }
}
