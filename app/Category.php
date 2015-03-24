<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table       = 'categories';
    protected $fillable    = ['category_name'];


    public function getAllCategories()
    {
        $categories = Category::all();

        return $categories;
    }

}
