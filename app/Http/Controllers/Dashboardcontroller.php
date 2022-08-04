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

    public function edit_prod($id){
        $prods = Prodmodel::where('id', '=', $id )->first();
        return view('edit')->with('data', $prods);
    }

    public function update(Request $request){
        $prods = Prodmodel::find('id');
        $prods->id = $request->input('id');
        $prods->prod_name = $request->input('prod_name');
        $prods->category = $request->input('category');
        $prods->qty = $request->input('qty');
        $prods->update();
        return redirect()->back()->with('Status', 'Updated Successfully');

    }

    public function Products(Request $prods){

        $Products = new Prodmodel;
 
        $Products->prod_name = $prods->prod_name;
        $Products->category = $prods->category;
        $Products->qty = $prods->qty;
        $Products->save();
        Alert::success('Success', 'Success Input');
 
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

        $Search1 = Prodmodel::where('prod_name', 'LIKE', $Search1)->get();
        return json_encode($Search1);
    }


}