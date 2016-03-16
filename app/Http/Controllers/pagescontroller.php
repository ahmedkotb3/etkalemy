<?php namespace App\Http\Controllers;

use App\Events;
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
		$date = date("Y-m-d");
		$events = Events::all();
		foreach($events as $event){


		}
//		$future_event = Events::where('date', '>=',$date)->get()->toArray();
//		$back_event = Events::where('date', '<',$date)->get()->toArray();
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
