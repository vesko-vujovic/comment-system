<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table      = 'comments';
    protected $fillable   = ['comment_text', 'approved', 'user_id', 'article_id', 'parent_id'];


}
