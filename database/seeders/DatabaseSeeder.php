<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PHPUnit\Util\Filesystem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */




    public function run()
    {
        //Remove all images
        $fs = new Filesystem();
        $fs->cleanDirectory('storage/app/public');

        sleep(10);

        \App\Models\Blog\Article::factory(10)->create([]);
    }
}
