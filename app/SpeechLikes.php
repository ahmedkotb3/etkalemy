<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeechLikes extends Model {


    protected $table ="speech_likes";

    protected $fillable = ["like_status","speech_id","user_id"];

}
