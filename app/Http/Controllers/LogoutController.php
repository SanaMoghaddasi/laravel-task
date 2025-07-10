<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index(){
        Auth::guard('user')->logout();
        return redirect()->route('auth.login.index');
    }
}
