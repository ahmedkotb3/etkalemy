<?php namespace App\Http\Controllers;

use App\Event_Pictures;
use App\Event_Speeches;
use App\Events;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('admin/form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image = Input::file('image');
		$title = Input::get('title');
		$date = Input::get('date');
		$place = Input::get('place');
		$description = Input::get('description');
		$facebook_link = Input::get('link1');
		$twitter_link = Input::get('link2');
		$PDF = Input::get('pdf');
		$day = Events::convert($date);

		$destinationPath = "uploadfiles/events/".$title;

		if(!file_exists($destinationPath)){
			mkdir("uploadfiles/events/".$title);
		}

		if(!empty($image)){

			$image_name = $image->getClientOriginalName();
			if($image->move($destinationPath, $image_name)){

				Events::save_event($title,$image_name,$place,$facebook_link,$twitter_link,$date,$day,$description,$PDF);
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function delete_event($id){

		$event = Events::find($id);
		$event->attenders->delete();
		$event->speeches->delete();
		$event->pictures->delete();
		$event->comments->delete();
		$event->whereid($id)->delete();

		unlink("uploadfiles/events/".$event->name);
	}

	public function update_event($id){

		$event = Events::find($id);

		$image = Input::file('image');
		$title = Input::get('title');
		$date = Input::get('date');
		$place = Input::get('place');
		$description = Input::get('description');
		$facebook_link = Input::get('link1');
		$twitter_link = Input::get('link2');
		$PDF = Input::get('pdf');
		$day = Events::convert($date);



		if($title !== $event->name){

			rename("uploadfiles/events/".$event->name,"uploadfiles/events/".$title);
			$destinationPath = "uploadfiles/events/".$title;

		}else{

			$destinationPath = "uploadfiles/events/".$event->name;
		}


		if(!empty($image)){

			unlink($destinationPath."/".$event->image);
			$image_name = $image->getClientOriginalName();
			if($image->move($destinationPath, $image_name)){
				Events::update_event($id,$title,$image_name,$place,$facebook_link,$twitter_link,$date,$day,$description,$PDF);
			}
		}else{
			Events::update_event($id,$title,$event->image,$place,$facebook_link,$twitter_link,$date,$day,$description,$PDF);
		}
	}

	public function add_pictures($event_id){

		$event = Events::find($event_id);

		$images = Input::file('images');

		if(!empty($images)){

			foreach ($images as $image) {

				$destinationPath = "uploadfiles/events/".$event->name; ;
				$image_name = $image->getClientOriginalName();

				if ($image->move($destinationPath, $image)) {

					Event_Pictures::add_event_pics($event_id,$image_name);

				}
			}
		}
	}

	public function add_vedios($event_id){

		$title = Input::get('title');
		$desc = Input::get('desc');
		$youtube_url=Input::get('youtube_url');

		Event_Speeches::add_event_vedios($event_id,$title,$desc,$youtube_url);

	}


}
