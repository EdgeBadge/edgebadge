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
	protected $fillable = ['name', 'about', 'criteriaurl', 'fk_BadgeImage', 'fk_SubjectGroup', 'fk_IssueID', 'fk_ParentBadge', 'fk_Creator'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function json($uid)
    {
    	$badgeinfo = Badge::find($uid);
    	$name = $badgeinfo->name;
    	$desc = $badgeinfo->about;
    	$crit = $badgeinfo->criteriaurl;
    	$is = Userdata::find($badgeinfo->fk_Creator);
    	$img = BadgeImage::find($badgeinfo->fk_BadgeImage);
    	$imgurl = $img->url;
    	return response()->json(['name' => $name, 'description' => $desc, 'image' => $imgurl, 'criteria' => $crit, 'issuer' => $is, 'alignment' => []]);
    }
]
}
