<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\LoginController;
Use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    

    public function login(){

        
        $credentials = request()->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);
    
        $remember = request()->filled('remember');
    
        if (Auth::attempt($credentials, $remember)){
            request()->session()->regenerate();
            return redirect('dashboard')->with('status', 'you are logged in');
        }
        
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);
    
       
    
    
    
        }

}
