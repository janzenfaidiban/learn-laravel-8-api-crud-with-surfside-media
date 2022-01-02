<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'slug' => $this->faker->text(50),
            'image' => $this->faker->imageUrl($width = 200, $height = 200),
            'description' => $this->faker->text(300),
        ];
    }
}
