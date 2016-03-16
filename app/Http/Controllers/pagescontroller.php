<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class pagescontroller extends Controller {

	public function index()
	{
		return view('pages/home');
	}
	public function tagmoatna()
	{
		return view('pages/tagmoatna');
	}
    public function joinus()
	{
		return view('pages/joinus');
	}
	public function slider1()
	{
		return view('pages/slider1');
	}
	public function showadmin(){

		if (Auth::user()){

			return redirect('/slider');

		}else{

			return view('auth.login');
		}
	}

}
