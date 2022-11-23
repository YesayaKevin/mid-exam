<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        $publisher_id = DB::table('publishers')->pluck('id');
        return [
            'publisher_id' => $this->faker->randomElement($publisher_id),
            'title' => $this->faker->unique()->sentence,
            'author' => $this->faker->name,
            'year' => $this->faker->year($max = 'now'),
            'synopsis' => $this->faker->text($maxNbChars = 255),
            'image' => "https://picsum.photos/seed/".$this->faker->unique()->word."/640/480/"
        ];
    }
}
