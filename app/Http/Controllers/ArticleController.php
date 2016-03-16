<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller {

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$title=Input::get('title');
		$subject=Input::get('subject');
		$video_url=Input::get('video_url');
		$image=Input::file('picture_url');

		$destinationPath = "uploadfiles/articles/".$title;

		if(!file_exists($destinationPath)){
			mkdir("uploadfiles/events/".$title);
		}

		if(!empty($image)){

			$image_name = $image->getClientOriginalName();
			if($image->move($destinationPath, $image_name)){

				Article::add_article($title,$subject,$video_url,$image_name);
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

	public function delete_article($id){

		$article = Article::find($id);
		$article->delete;
		unlink("uploadfiles/articles/".$article->title);

	}

	public function update_article($id){

		$article = Article::find($id);

		$title=Input::get('title');
		$subject=Input::get('subject');
		$video_url=Input::get('video_url');
		$image=Input::file('picture_url');

		if($title !== $article->title){

			rename("uploadfiles/articles/".$article->title,"uploadfiles/articles/".$title);

			$destinationPath = "uploadfiles/articles/".$title;

		}else{

			$destinationPath = "uploadfiles/articles/".$article->title;

		}

		if(!empty($image)){

			$image_name = $image->getClientOriginalName();
			if($image->move($destinationPath, $image_name)){

				Article::edit_article($id,$title,$subject,$video_url,$image_name);
			}
		}
	}

}
