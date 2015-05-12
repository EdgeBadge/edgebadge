<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'badges';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'about', 'fk_BadgeImage', 'fk_SubjectGroup', 'fk_IssueID', 'fk_ParentBadge', 'fk_Creator'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
