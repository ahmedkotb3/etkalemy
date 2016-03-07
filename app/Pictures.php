<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model {

    protected $table ="pictures";

    protected $fillable = ["album_id","url"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * return associated album
     */
    public function album(){
        return $this->belongsTo("App\Albums","album_id");
    }
}
