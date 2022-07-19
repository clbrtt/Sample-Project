<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
use App\Models\Prodmodel;


class Dashboardcontroller extends Controller {

    public function __construct(){
    	$this->middleware('guest:admin');
    }
    
    public function dashboard(){
        $prods= Prodmodel::get();
        
        return view ('Dashboard')->with('data', $prods);

    }



}