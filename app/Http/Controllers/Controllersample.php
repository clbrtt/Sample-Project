<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
use App\Models\Prodmodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

class Controllersample extends Controller {

    use AuthenticatesUsers;


    public function login (){
        
        return view('login');

    }

    public function LoginTrigfunc (Request $request){

       $request->validate([
            'username' => 'required|email',
            'password' => 'required',
           
        ]);

        $inputs = $request->only('username', 'password');

    	if(Auth::guard('admin')->attempt($inputs)){
    		return view('Dashboard');
    	}
        else {
            return view('login');
        }

    }

    public function Register (Request $register){

       $Register = new AuthModel;

       $Register->username = $register->username;
       $Register->password = Hash::make($register->password);
       $Register->save();

       return view('login'); 
       
    }
}
    


















?>