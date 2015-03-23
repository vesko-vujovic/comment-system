<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportedComment extends Model {

	protected $table       = 'reported_comments';
    protected $fillable    = ['report_for', 'comment_id'];

}
