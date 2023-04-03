<?php

namespace Database\Factories;

//Crea una url amigable
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        /*
        Se agrego los textos faker, relleno.
        */
        return [
            'user_id' => 1,
            'title' => $title = $this->faker->sentence(),
            //'slug' => $this->faker->sentence(),
            'slug' => Str::slug($title),
            'body' => $this->faker->text(2200),
        ];
    }
}
