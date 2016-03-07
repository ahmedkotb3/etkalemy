<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'phone', 'website_link', 'facebook_page', 'user_pic_url'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * return user events that he attended or welling to attend
     */
    public function events(){
        return $this->belongsToMany("App\Events","event-attenders","user_id","event_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * return user articles he wrote
     */
    public function articles(){
        return $this->hasMany("App\Article","user_id");
    }

}
