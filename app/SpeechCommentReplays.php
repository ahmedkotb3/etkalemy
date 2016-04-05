<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeechCommentReplays extends Model {

    protected $table = "speech_comment_replays";

    protected $fillable = ["comment_id","user_id","text","speech_id","user_name","user_image"];

}
