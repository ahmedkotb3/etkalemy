<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model {

    protected $table ="albums";

    protected $fillable = ["name"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return album pictures
     */
    public function pictures(){
        return $this->hasMany("App\Pictures","album_id");
    }


}
