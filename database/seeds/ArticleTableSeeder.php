<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
       $obj                  = new \App\Article();
       $obj->article_title   = 'At Kodak, Clinging to a Future Beyond Film';
       $obj->body_text       = 'Of the roughly 200 buildings that once stood on the 1,300-acre campus of Eastman Kodak’s business park in Rochester, 80 have been demolished and 59 others sold off. Terry Taber, bespectacled, 60, and a loyal Kodak employee of 34 years, still works in one of the remaining Kodak structures, rubble from demolition not far from its doors.

Mr. Taber oversees research and development at Kodak. Many people might be surprised to know that Kodak is still in business at all, much less employing someone in the hopeful-sounding enterprise of developing new technology ideas. But if the film company, which emerged from bankruptcy in 2013, has any light in its future, Mr. Taber is likely to have something to do with it.

In a warren of basement labs, some of the 300 scientists and engineers who work for Mr. Taber are studying nanoparticle wonder inks, cheap sensors that can be embedded in packaging to indicate whether meats or medicines have spoiled, and touch screens that could make smartphones cheaper.';
      $obj->picture_url      = public_path('/images/articles/kodak.jpg');
      $obj->category_id      = 1;
      $obj->timestamps       = true;
      $obj->save();
    }

}