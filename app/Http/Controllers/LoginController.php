<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;

class LoginController extends Controller 
{
	public function index(){

		return view('login.index');
	}

	public function verify(Request $req){

		//$users = User::all();

		$abc = User::where('username', $req->username)
					->where('password', $req->password)
					->get();
/*
		$user = DB::table('users')->where('username', $req->username)
					->where('password', $req->password)
					->get();*/					
		if(count($abc) > 0 ){
			$user=$abc[0];
	
			$req->session()->put('name', $req->input('username'));
			//$req->session()->put('user', $user->type);
			//$req->session()->put('user', $user[0]->type);
			$req->session()->put('user', $user);

			return redirect()->route('home.index');
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect('/login');
		}
	}

}
