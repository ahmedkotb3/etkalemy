<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagescontroller extends Controller
{


	public function index()
	{

		$sliders = Slider::all();
		return view('pages/home',array('sliders'=>$sliders));
	}

	public function tagmoatna()
	{
		return view('pages/tagmoatna');
	}

	public function joinus()
	{
		return view('pages/joinus');
	}

	public function tagmoatnaevent()
	{
		return view('pages/tagmoatna-event');
	}

	public function showadmin()
	{

		if (Auth::user()) {

			return redirect('/slider');

		} else {

			return view('auth.login');
		}


	}
}
