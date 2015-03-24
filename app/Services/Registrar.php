<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'email' => 'required|email|max:255|unique:users',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return \Userdata::create([
            'personaemail' => 'irgendwas',
			'email' => $data['email'],
            'firstname' => $data['fname'],
            'lastname' => $data['lname'],
            'picURL' => $data['picUrl'],
            'description' => $data['description'],
            'biography' => $data['biography'],
            'roleID' => $data['roleID'],
		]);
	}

}
