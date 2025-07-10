<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(
    ){
        return view('auth.login');
    }
    public function post(LoginPostRequest $request){

        $user = User::query()
            ->where('username', '=', $request->input('username'))
            ->first();

        if (!Hash::check($request->input('password'), $user->password)){
            return back()
                ->withErrors([
                    'general' => 'اشتباه'
                ]);
        }
        Auth::guard('user')->login($user);
        return redirect()->route('dashboard.index');
    }
}
