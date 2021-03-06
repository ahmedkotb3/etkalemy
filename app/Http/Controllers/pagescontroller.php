<?php namespace App\Http\Controllers;

use App\Albums;
use App\Article;
use App\Article_Comments;
use App\Article_Likes;
use App\Article_Seen;
use App\ArticleCommentReplays;
use App\Event_Speeches;
use App\EventCommentReplays;
use App\Events;
use App\Events_Comments;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Slider;
use App\Speech_Comments;
use App\SpeechCommentReplays;
use App\SpeechLikes;
use App\SpeechSeens;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Madcoda\Youtube\Facades\Youtube;
use Thujohn\Twitter\Facades\Twitter;

class pagescontroller extends Controller
{


	public function index()
	{

		return view('pages/home');
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
				'id'=>$event->id,
					'date'=>$event->date
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

	public function tagmoatnaevent($year)
	{
		$id = Events::where('date',"=",$year)->get()->first()->id;
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
					'id'=>$event->id,
					'date'=>$event->date
			);
			array_push($eventnames_and_year,$array);
		}
		$vedioes = Events::find($id)->speeches;
		$pictures = Events::find($id)->pictures;
		 $replays = Events::find($id)->replays;
		$number_of_vedios = count($vedioes);
		$number_of_pictures = count($pictures);

		$comments =Events_Comments::where('event_id','=',$id)->get();
		$seens = SpeechSeens::all();

		return view('pages/tagmoatna-event',array('event_data'=>$event_data,'years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'vedioes'=>$vedioes,
				'number_of_vedios'=>$number_of_vedios,'pictures'=>$pictures,'number_of_pictures'=>$number_of_pictures,'comments'=>$comments,'replays'=>$replays,'seens'=>$seens));
	}


	public function joinus()
	{
		return view('pages/joinus');
	}


	public function tagmoatnavideos($id)
	{
		//return $id=Events::where('data','=',$year)->get()->first()->id;
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
		 $replays = $vedio->replays;
		 $likes = $vedio->likes;
		 $seens = $vedio->seens;

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
		return view('pages/tagmoatna-videoplay',array('years'=>array_unique($years),'eventnames_and_year'=>$eventnames_and_year,'event_of_vedio'=>$event_of_vedio,'vedio'=>$vedio,
				'youtube_comments'=>$youtube_comments,'comments'=>$comments,'likes'=>$likes,'seens'=>$seens,'replays'=>$replays));
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


	public function OurWorld()
	{
		 $world =Article::all();
		$more_seen = array();
		$seen_arr = array();
		foreach($world as $data) {
			 $seens = count(Article::find($data->id)->seens);
			array_push($seen_arr,$seens);
			$array = array(
				'id'=>$data->id,
				'title'=>$data->title,
				'subject'=>$data->subject,
				'picture_url'=>$data->picture_url,
				'video_url'=>$data->video_url,
				'type'=>$data->type,
				'seen_num'=>$seens
			);
			array_push($more_seen,$array);
		}
		rsort($seen_arr);
		$last = array();
		for($i=0;$i<count(array_unique($seen_arr));$i++){
			foreach($more_seen as $seen_data){
				if( $seen_data['seen_num'] == $seen_arr[$i]){
					array_push($last,$seen_data);

				}

			}

		}
		$vedios=array();
		$articles = array();
		foreach($world as $data){
			if($data->type == "1"){
				array_push($vedios,$data);
			}else{
				array_push($articles,$data);
			}
		}

		 $newest_to_oldest = Article::orderBy('created_at','desc')->get();
		  $oldest_to_newwst = Article::orderBy('created_at','asc')->get();
//		if(Auth::check()){
//			$likes = Article_Likes::where('user_id','=',Auth::user()->id)->get();
//		}

		 $likes_count = Article_Likes::all();
		 $seens = Article_Seen::all();
		return view('pages/OurWorld',array('world'=>$world,'articles'=>$articles,'vedios'=>$vedios,'newest_to_oldest'=>$newest_to_oldest,'oldest_to_newwst'=>$oldest_to_newwst,
				'likes_count'=>$likes_count,'seens'=>$seens,'last'=>$last));
	}

	public function OurWorldArticle($id)
	{
		$article = Article::find($id);
		 $comments = $article->comments;
		  $likes = $article->likes;
		  $seens = $article->seens;
		 $replays = $article->replays;
		 $seens_count = count($seens);
		 $likes_count = count($likes);

		return view('pages/OurWorld-Article',array('article'=>$article,'comments'=>$comments,'likes'=>$likes,'likes_count'=>$likes_count,'seens_count'=>$seens_count,'replays'=>$replays));
	}
	public function OurWorldvideo($id)
	{
		$vedio = Article::find($id);
		 $replays = $vedio->replays;
		$likes = $vedio->likes;
		$seens = $vedio->seens;
		$likes_count = count($likes);
		$seens_count = count($seens);
		/***** comments from youtube ******/
		 $vedio_id = substr($vedio->video_url,strrpos($vedio->video_url,'/')+1) ;
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


		/***** comments from youtube ******/
		$vedio = Article::find($id);
		$comments = $vedio->comments;
		return view('pages/OurWorld-video',array('vedio'=>$vedio,'comments'=>$comments,'youtube_comments'=>$youtube_comments,'likes'=>$likes,'likes_count'=>$likes_count,
				'seens_count'=>$seens_count,'replays'=>$replays));
	}
	public function Gallery()
	{
		$albums = Albums::all();
		return view('pages/Gallery',array('albums'=>$albums));
	}
	public function Galleryevent($id)
	{
		$album = Albums::find($id);
		 $album_name = $album->name;
		$images_of_album = $album->pictures;
		return view('pages/Gallery-event',array('images_of_album'=>$images_of_album,'album_name'=>$album_name));
	}

	public function twitter()
	{
		return Twitter::getUserTimeline(['screen_name' => '@etkallemi', 'count' => 20, 'format' => 'json']);
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
		if(Auth::check()) {
			$comment = Input::get('comment');
			$event_comment = new Events_Comments;
			$event_comment->text = $comment;
			$event_comment->event_id = Input::get('event_id');
			$event_comment->user_id = Auth::user()->id;

			$event_comment->user_name = Auth::user()->english_name;
			$event_comment->user_image = Auth::user()->profile_image;
			$event_comment->save();
		}


	}
	public function vedio_comment(){
		if(Auth::check()){
			$comment = Input::get('comment');
			$vedio_comment = new Speech_Comments;
			$vedio_comment->text=$comment;
			$vedio_comment->speech_id=Input::get('vedio_id');
			$vedio_comment->user_id=Auth::user()->id;

			$vedio_comment->user_name=Auth::user()->english_name;
			$vedio_comment->user_image=Auth::user()->profile_image;
			$vedio_comment->save();
		}



	}
	public function article_comment(){
		if(Auth::check()) {
			 $comment = Input::get('comment');
			$article_comment = new Article_Comments;
			$article_comment->text=$comment;
			$article_comment->article_id=Input::get('event_id');
			$article_comment->user_id=Auth::user()->id;

			$article_comment->user_name=Auth::user()->english_name;
			$article_comment->user_image=Auth::user()->profile_image;
			$article_comment-> save();
		}
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



	public function article_like_save(){
		$article = new Article_Likes;
		$article->article_id =Input::get('article_id');
		$article->user_id = Input::get('user_id');
		$article->like_status ="1" ;
		$article->save();

	}
	public function get_like_count(){
		return $count = 3;
	}
	public function test_save_seeen(){
		$article = new Article_Seen();
		$article->article_id =Input::get('article_id');
		$article->user_id = Input::get('user_id');
		$article->seen_status ="1" ;
		$article->save();

	}
	public function article_comment_replay(){

		$replay = new ArticleCommentReplays;
		$replay->article_id=Input::get('article_id');
		$replay->user_id=Input::get('user_id');
		$replay->comment_id= Input::get('comment_id');
		$replay->text=Input::get('replay');
		$replay->user_name=Input::get('user_name');
		$replay->user_image=Input::get('user_image');
		$replay->save();

	}
	public function article_search($name){
	return json_decode(Article::where('title','=',$name)->get());
//		return array(
//			'name'=>'hend',
//				'age'=>'32'
//		);

	}

	public function Article_likes_count($id){

		return count(Article::find($id)->likes) ;

	}
	public function save_event_vedio_like(){
		$like = new SpeechLikes;
		$like->speech_id = Input::get('vedio_id');
		$like->user_id = Input::get('user_id');
		$like->like_status = "1";
		$like->save();

	}
	public function get_article_comments($id){
		return json_decode(Article_Comments::where('article_id','=',$id)->get());
	}
	public function get_article_comment_replays($id){
		return json_decode(ArticleCommentReplays::where('comment_id','=',$id)->get());
	}
	public function get_event_comments($id){
		return json_decode(Events_Comments::where('event_id','=',$id)->get());
	}
	public function get_event_comment_replays($id){
		return json_decode(EventCommentReplays::where('comment_id','=',$id)->get());
	}
	public function get_speech_comments($id){
		return json_decode(Speech_Comments::where('speech_id','=',$id)->get());
	}
	public function get_speech_comment_replays($id){
		return json_decode(SpeechCommentReplays::where('comment_id','=',$id)->get());
	}
	public function event_comment_replay(){

		$replay = new EventCommentReplays;
		$replay->event_id=Input::get('event_id');
		$replay->user_id=Input::get('user_id');
		$replay->comment_id= Input::get('comment_id');
		$replay->text=Input::get('replay');
		$replay->user_name=Input::get('user_name');
		$replay->user_image=Input::get('user_image');
		$replay->save();

	}
	public function speech_comment_replay(){

		$replay = new SpeechCommentReplays();
		$replay->speech_id=Input::get('speech_id');
		$replay->user_id=Input::get('user_id');
		$replay->comment_id= Input::get('comment_id');
		$replay->text=Input::get('replay');
		$replay->user_name=Input::get('user_name');
		$replay->user_image=Input::get('user_image');
		$replay->save();

	}
	public function save_speech_seen(){
		$seen = new SpeechSeens;
		$seen->speech_id=Input::get('speech_id');
		$seen->user_id =Input::get('user_id') ;
		$seen->seen_status="1";
		$seen->save();
	}
}
