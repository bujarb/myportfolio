<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Home','About','Cv','Projects'];

        foreach ($pages as $page) {
          $pagename = new Page();
          $pagename->page_name = $page;
          $pagename->save();
        }
    }
}
