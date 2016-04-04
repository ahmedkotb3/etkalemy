<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCommentReplays extends Model {

    protected $table = "event_comment_replays";

    protected $fillable = ["comment_id","user_id","text","event_id","user_name","user_image"];

}
