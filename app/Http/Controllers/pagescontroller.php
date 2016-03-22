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
		 $year = strtok($date, '-');
		 $events = Events::all();
		$future_events = array();
		$last_events = array();
		$years = array();
		$eventnames_and_year = array();
		foreach($events as $event){
			array_push($years,strtok($event->date, '-'));
			$array = array(
				'year'=>strtok($event->date, '-'),
				'name'=>$event->name
			);
			array_push($eventnames_and_year,$array);
			if($event->date >=$date){
				array_push($future_events,$event);
			}else{
				array_push($last_events,$event);
			}
		}

		return view('pages/tagmoatna',array('years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'future_events'=>$future_events,'last_events'=>$last_events));
	}

	public function joinus()
	{
		return view('pages/joinus');
	}

	public function tagmoatnaevent()
	{
		return view('pages/tagmoatna-event');
	}

	public function tagmoatnavideos()
	{
		return view('pages/tagmoatna-videos');
	}
	public function tagmoatnavideoplay()
	{
		return view('pages/tagmoatna-videoplay');
	}
	public function tagmoatnapictures()
	{
		return view('pages/tagmoatna-pictures');
	}
	public function tagmoatnadonyana()
	{
		return view('pages/tagmoatna-donyana');
	}


	public function etkalemy(){
		return view('pages/etkalemy');
	}
	public function contactus(){
		return view('pages/contactus');
	}
	public function aboutus(){
		return view('pages/aboutus');
	}


	public function login(){
		return view('pages/login');
	}
	public function personalPage(){

			return view('pages/personal_page');


		}


	public function EditPersonalPage(){

			return view('pages/edit_personal_page');



	}

	public function showadmin()
	{

		if (Auth::check()) {
			if(Auth::user()->role == "admin"){
				return redirect('/slider');
			}

		} else {

			return view('admin.login');
		}


	}
}
