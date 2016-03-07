<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {

    protected $table = "events";

    protected $fillable = ["name","video_url","map_long","map_lat","facebook_link","twitter_link","type"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return comments on this event
     */
    public function comments(){
        return $this->hasMany("App\Events_Comments","event_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return pictures of this event
     */
     public function pictures(){
        return $this->hasMany("App\Event_Pictures","event_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * many to many relationship has many users attenders
     */
    public function attenders(){
        return $this->belongsToMany("App\User","event-attenders","event_id","user_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return event speeches
     */
    public function speeches(){
        return $this->hasMany("App\Event_Speeches","event_id");
    }
}
