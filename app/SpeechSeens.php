<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeechSeens extends Model {

    protected $table ="speech_seens";

    protected $fillable = ["seen_status","speech_id","user_id"];

}
