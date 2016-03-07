<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_Pictures extends Model {

    protected $table = "event-pictures";

    protected $fillable = ["id","pic_url","event_id"];

    public function event(){
        return $this->belongsTo("App\Events","event_id");
    }


}
