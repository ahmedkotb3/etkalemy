<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCommentReplays extends Model {

    protected $table = "article_comment_replays";

    protected $fillable = ["comment_id","user_id","text","article_id","user_name","user_image"];


}
