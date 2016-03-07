<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_Speeches extends Model {

    protected $table = "event-speeches";

    protected $fillable = ["title","event_id","desc","youtube_url"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * speech belong to one event
     */
    public function event(){
        return $this->belongsTo("App\Events","event_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * get Speech Comments
     */
    public function comments(){
        return $this->hasMany("App\Speech_Comments","speech_id");
    }
}
