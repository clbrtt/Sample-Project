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

    
    ///public function LoginTrigfunc(Request $request){
        

        
       // return dd($request->all());
      // return view('Dashboard');

   // }

    public function LoginTrigfunc (Request $request){

       $request->validate([
            'email' => 'required|email',
            'pass' => 'required',
           
        ]);


       $inputs = [
    		'username' => $request->email,
    		'password' => Hash::make($request->pass),
    	];

    	if (Auth::guard('admin')->attempt($inputs)){
    		return redirect()->route('Dashboard');
    	}
        else {
            // return view('login');
           // return dd('mali ang password');
           return redirect()->route('Dashboard');
        }

    }

    public function Register (Request $register){

       $Register = new AuthModel;

       $Register->username = $register->email;
       $Register->password = Hash::make($register->pass);
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
    

    public function logout (){
        
        return view('login');

    }

    public function delete_id($id){

        $delete = Prodmodel::find($id);
        $delete->delete();

        return back();

    }






}
    


















?>