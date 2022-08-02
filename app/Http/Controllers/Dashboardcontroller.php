<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodmodel;
use Illuminate\Support\Facades\Auth;
use Alert;

class Dashboardcontroller extends Controller {

    

    /*public function __construct(){
    	$this->middleware('guest:admin');
    }*/
    
    public function admindashboard(){
        $prods= Prodmodel::get();
        
        return view('dashboard')->with('data', $prods);
     

    }

    public function Products(Request $prods){

        $Products = new Prodmodel;
 
        $Products->prod_name = $prods->prod_name;
        $Products->category = $prods->category;
        $Products->qty = $prods->qty;
        $Products->save();
        Alert::success('Success Title', 'Success Message');
 
        return back();
        
     }

     public function delete_id($id){

        $delete = Prodmodel::find($id);
        $delete->delete();

        return back();

    }

    public function logout(){

        Auth::logout();
    
        session()->invalidate();
    
        session()->regenerateToken();
    
        return redirect('/login');
    }

    public function searchProduct($Search1){
        return json_encode($Search1);
    }


}