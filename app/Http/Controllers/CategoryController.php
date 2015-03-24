<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller {


	public function readArticle($id)
	{
		$obj         = new Article();
		$article     = $obj->readArticle($id);

		$obj         = new  Category();
		$cat         = $obj->getAllCategories();

		return view('articles.home')
			          ->withArticle($article)
		              ->withCat($cat);

	}

	public function technology($id)
	{
		$last  = Carbon::now()->yesterday();

	}




}
