<?php namespace App\Http\Controllers;

use App\Event_Speeches;
use App\Events;
use App\Events_Comments;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use App\Speech_Comments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Madcoda\Youtube\Facades\Youtube;

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
				'name'=>$event->name,
				'id'=>$event->id
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

	public function tagmoatnaevent($id)
	{

		$date = date("Y-m-d");

		$events = Events::all();

		$years = array();

		$eventnames_and_year = array();

		$event_data = array();
		foreach($events as $event){
			if($event->id == $id){
				array_push($event_data,$event);
			}
			array_push($years,strtok($event->date, '-'));
			$array = array(
					'year'=>strtok($event->date, '-'),
					'name'=>$event->name,
					'id'=>$event->id
			);
			array_push($eventnames_and_year,$array);
		}
		 $vedioes = Events::find($id)->speeches;
		$pictures = Events::find($id)->pictures;
		$number_of_vedios = count($vedioes);
		$number_of_pictures = count($pictures);

		 $comments =Events_Comments::where('event_id','=',$id)->get();

		return view('pages/tagmoatna-event',array('event_data'=>$event_data,'years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'vedioes'=>$vedioes,
				'number_of_vedios'=>$number_of_vedios,'pictures'=>$pictures,'number_of_pictures'=>$number_of_pictures,'comments'=>$comments));
	}

	public function tagmoatnavideos($id)
	{
		$events = Events::all();
		$years = array();
		$event_data = array();
		$eventnames_and_year = array();
		foreach($events as $event){
			if($event->id == $id){
				array_push($event_data,$event);
			}
			array_push($years,strtok($event->date, '-'));
			$array = array(
					'year'=>strtok($event->date, '-'),
					'name'=>$event->name,
					'id'=>$event->id
			);
			array_push($eventnames_and_year,$array);
		}
		$vedioes = Events::find($id)->speeches;
		return view('pages/tagmoatna-videos',array('years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'event_data'=>$event_data,'vedioes'=>$vedioes));
	}
	/********* here ***********/
	public function tagmoatnavideoplay($id)
	{

		$vedio = Event_Speeches::where('id','=',$id)->get()->first();
		/***** comments from youtube ******/
		 $vedio_id = substr($vedio->youtube_url,strrpos($vedio->youtube_url,'/')+1) ;
		$youtube_comments_file = file_get_contents('https://www.googleapis.com/youtube/v3/commentThreads?key=AIzaSyAsaksixbvwTyTdXuYoyooitplftJnDBSs&textFormat=plainText&part=snippet&videoId='.$vedio_id.'&maxResults=50');
		$result = json_decode($youtube_comments_file, true);

		$comment_number = count($result['items']);
		$youtube_comments = array();

		for($i=0;$i<$comment_number;$i++){
			$text = $result['items'][$i]['snippet']['topLevelComment']['snippet']['textDisplay'];
			$user_name = $result['items'][$i]['snippet']['topLevelComment']['snippet']['authorDisplayName'];
			$user_image = $result['items'][$i]['snippet']['topLevelComment']['snippet']['authorProfileImageUrl'];
			$comment = array(
					'user_name'=>$user_name,
					'user_iamge'=>$user_image,
					'text'=>$text,
			);

			array_push($youtube_comments,$comment);

		}
		$comments = $vedio->comments;

		/***** comments from youtube ******/
		    $event_of_vedio = Events::where('id','=',$vedio->event_id)->get()->first();

		$events = Events::all();
		$years = array();
		$event_data = array();
		$eventnames_and_year = array();
		foreach($events as $event){

			array_push($years,strtok($event->date, '-'));
			$array = array(
					'year'=>strtok($event->date, '-'),
					'name'=>$event->name,
					'id'=>$event->id
			);
			array_push($eventnames_and_year,$array);
		}
		return view('pages/tagmoatna-videoplay',array('years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'event_of_vedio'=>$event_of_vedio,'vedio'=>$vedio,'youtube_comments'=>$youtube_comments,'comments'=>$comments));
	}
	public function tagmoatnapictures($id)
	{
		$events = Events::all();

		$years = array();
		$event_data = array();
		$eventnames_and_year = array();

		foreach($events as $event){
			if($event->id == $id){
				array_push($event_data,$event);
			}
			array_push($years,strtok($event->date, '-'));
			$array = array(
					'year'=>strtok($event->date, '-'),
					'name'=>$event->name,
					'id'=>$event->id
			);
			array_push($eventnames_and_year,$array);
		}

		$event = Events::find($id);
		  $pictures = $event->pictures;

		return view('pages/tagmoatna-pictures',array('pictures'=>$pictures,'event'=>$event,'years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year));
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

	public function event_comment(){

		$comment = Input::get('comment');
		$event_comment = new Events_Comments;
		 $event_comment->text=$comment;
		$event_comment->event_id=Input::get('event_id');
		 $event_comment->user_id=Auth::user()->id;

		$event_comment->user_name=Auth::user()->english_name;
		$event_comment->user_image=Auth::user()->profile_image;
		$event_comment->save();


	}
	public function vedio_comment(){

		$comment = Input::get('comment');
		$vedio_comment = new Speech_Comments;
		$vedio_comment->text=$comment;
		$vedio_comment->speech_id=Input::get('vedio_id');
		$vedio_comment->user_id=Auth::user()->id;

		$vedio_comment->user_name=Auth::user()->english_name;
		$vedio_comment->user_image=Auth::user()->profile_image;
		$vedio_comment->save();


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
