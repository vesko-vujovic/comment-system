<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$obj      = new Category();
		$cat      = $obj->getAllCategories();

		$obj2     = new Article();
		$article  = $obj2->getNewArticles();

		return view('index')
			      ->withCat($cat)
			      ->withArt($article);
	}

	public function logout()
	{
		Auth::logout();

		return redirect('/');

	}

}
