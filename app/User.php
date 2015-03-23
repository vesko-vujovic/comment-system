<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
	protected $fillable = ['name', 'email','fb_id', 'profile_pic'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function createFacebookUser($userObject)
	{
		$email = User::where('email', '=', $userObject->getEmail())->first();

		if(count($email) == 0)
		{
		   $user = 	User::create([
			           'fb_id'         => $userObject->getId(),
			           'name'          => $userObject->getName(),
			           'profile_pic'   => $userObject->getAvatar(),
			           'email'         => $userObject->getEmail()
		   ]);

		}

		Auth::login($email);



	}

}
