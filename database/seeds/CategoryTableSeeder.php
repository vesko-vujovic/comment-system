<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        $obj                = new \App\Category();
        $obj->category_name = 'Sience';
        $obj->timestamps    = true;
        $obj->save();
    }

}