<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PublisherSeeder;
use Database\Seeders\BookCategorySeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            BookCategorySeeder::class,
        ]);
    }
}
