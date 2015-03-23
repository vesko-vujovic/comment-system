<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $table    = 'articles';
    protected $fillable = ['article_title', 'picture_url', 'body_text', 'category_id',];



    public function getArticles()
    {


    }

}
