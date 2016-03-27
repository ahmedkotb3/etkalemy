<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Madcoda\Youtube\Facades\Youtube;


class YoutubeController extends Controller {

public function index()
{
    $youtube = new Youtube(array('key' => 'AIzaSyAsaksixbvwTyTdXuYoyooitplftJnDBSs'));

dd($videoCommentThreads = $youtube->commentThreads->listCommentThreads('snippet', array(
    'videoId' => "PYjyg0LNTfE",
    'textFormat' => 'plainText',
)));
}

}