<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'issues';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['issuedate', 'expiredate', 'issuedate', 'fk_Badge', 'fk_Recipient'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
