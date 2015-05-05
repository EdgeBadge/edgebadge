<?php namespace App\Services;

use App\Userdata;
use Illuminate\Contracts\Auth\Usercheck as UsercheckContract;

class Usercheck implements UsercheckContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  string  $hash
	 * @return array   
	*/
	public function check($hash)
	{
		$users = Userdata::all()->toArray();
		for($i=0;$i<sizeof($users);$i++){
			$cur = $users[$i];
			if($cur["personaemail"]===$hash){
				return array("status" => "success", "data" => $users[$i]);
			}
		}
		return array("status" => "not found", "data" => "no data");
	}

}
