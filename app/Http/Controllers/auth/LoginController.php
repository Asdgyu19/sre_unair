<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }
}
