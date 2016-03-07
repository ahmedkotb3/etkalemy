<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = "articles";

    protected $fillable = ["user_id","title","subject","video_url","audio_url","picture_url"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * return user who wrote this article
     */
    public function user(){
        return $this->belongsTo("App\User","user_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return comments related to article
     */
    public function comments(){
        return $this->hasMany("App\Article_Comments","article_id");
    }

}
