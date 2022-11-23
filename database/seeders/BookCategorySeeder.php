<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookCategorySeeder extends Seeder
{
    public function run()
    {
        BookCategory::factory()
            ->count(100)
            ->create();
    }
}
