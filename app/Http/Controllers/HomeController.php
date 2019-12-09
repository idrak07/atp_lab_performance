<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){
    	$status = $request->session()->get('user.status') ;
    	if($status==0){
    		return redirect()->route('emp.index');
    	}
    	else 
    	{
    		return redirect('/login');
    	}
    }
}
