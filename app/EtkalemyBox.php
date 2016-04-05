<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EtkalemyBox extends Model {

    protected $table ="etkalemy_boxes";

    protected $fillable = ["image","text"];

}
