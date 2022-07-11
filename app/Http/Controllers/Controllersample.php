<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Controllersample extends Controller {

    use AuthenticatesUsers;

    public function __construct(){
    	$this->middleware('guest:admin');
    }

    public function login (){
        
        return view('login');

    }
    

    ///public function LoginTrigfunc(Request $request){
        

        
       // return dd($request->all());
      // return view('Dashboard');

   // }

    public function LoginTrigfunc (Request $request){
        

       /* $credentials = [
    		'Email' => $request->email,
    		'Password' => $request->pass
    	];*/

    	if(Auth::guard('admin')->attempt(['Email' => $request->email, 'Password' => $request->pass])){
    		return redirect()->route('Dashboard');
    	}
        else {
            return view('login');
        }


    }

    public function Register (Request $register){

       $Register = new AuthModel;

       $Register->Email = $register->email;
       $Register->Password = $register->pass;
       $Register->save();

       return view('login'); 
       
    }

    
        
    public function dashboard (){
        
        return view ('Dashboard');

    }

    public function logout (){
        
        return redirect()->route('login');

    }




}
    


















?>