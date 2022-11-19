<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        auth()->attempt($request->only('email', 'password'));
        if(Auth::check()) {
            return redirect()->route('home');
        }
        else {
            return back()->with('status', 'Password or email wrong');
        }
    }

    public function logout(){
        auth()->logout();
        return back();
    }
}
