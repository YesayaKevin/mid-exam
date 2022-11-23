<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    public function definition()
    {
        $book_id = DB::table('books')->pluck('id');
        $category_id = DB::table('categories')->pluck('id');
        return [
            'book_id' => $this->faker->randomElement($book_id),
            'category_id' => $this->faker->randomElement($category_id)
        ];
    }
}
