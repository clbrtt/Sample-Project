<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
use App\Models\Prodmodel;
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
        
        
        $credentials = [
    		'username' => $request->email,
    		'password' => $request->pass,
    	];

    	if(Auth::guard('admin')->attempt($credentials)){
    		return redirect()->route('Dashboard');
    	}
        else {
            // return view('login');
            return dd('mali ang password');
        }


    }

    public function Register (Request $register){

       $Register = new AuthModel;

       $Register->username = $register->email;
       $Register->password = $register->pass;
       $Register->save();

       return view('login'); 
       
    }

    public function Products (Request $prods){

        $Products = new Prodmodel;
 
        $Products->prod_name = $prods->prodname;
        $Products->category = $prods->category;
        $Products->qty = $prods->qty;
        $Products->save();
 
        return back(); 
        
     }    
    
    public function dashboard(){
        $prods= Prodmodel::get();
        
        return view ('Dashboard')->with('data', $prods);

    }

    public function logout (){
        
        return view('login');

    }




}
    


















?>