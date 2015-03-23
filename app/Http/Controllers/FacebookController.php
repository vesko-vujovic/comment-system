<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller {

	public function getFacebookUser()
    {
        $user     = Socialite::with('facebook')->user();

        if($user)
        {
            $obj = new User();
            $u = $obj->createFacebookUser($user);
        }

        return redirect('/');
    }

}
