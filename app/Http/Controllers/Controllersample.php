<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllersample extends Controller {

    public function login (){
        
        return view('login');

    }


    ///public function LoginTrigfunc(Request $request){
        

        
       // return dd($request->all());
      // return view('Dashboard');

   // }

    public function LoginTrigfunc (Request $request){
        $Email = 'John@Email.com';
        $Password = 123456;


        if ($request->email== $Email && $request->pass== $Password) {
            
            return redirect()->route('Dashboard');
        
        } else {

            return redirect()->route('login');
        }
    }
        


    public function dashboard (){
        
        return view('Dashboard');

    }

}
    


















?>