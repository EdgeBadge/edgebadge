<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model implements AuthenticatableContract, CanResetPasswordContract{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'userdata';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['lastname', 'firstname', 'email', 'descripton', 'biography', 'picURL', 'roleID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['personaemail'];

}
