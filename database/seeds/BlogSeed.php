<?php

use Illuminate\Database\Seeder;
use App\Models\Blogs;


class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Blogs::class, 5)->create();

    }
}
