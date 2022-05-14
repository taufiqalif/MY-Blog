<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(2,3)),
            // 'body' => $this->faker->paragraph(mt_rand(10,50)),
            'body' => collect($this->faker->paragraphs(mt_rand(5,15)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1,5),
            'user_id'=> mt_rand(1,10)
        ];
    }
}