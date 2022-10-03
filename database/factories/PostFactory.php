<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'category_id' => Category::factory(),
            'slug' => $this->faker->unique()->word(),
            'created' => now(),
            'title' => $this->faker->sentence(),
            'version' => '1.0',
            'excerpt' => $this->faker->sentence(),
            'body' => '<p>'.implode('</p><p>', $this->faker->paragraphs(6)).'</p>',
            'link_blog' => 'https://mungkhs.tistory.com/104',
            'link_youtube' => 'https://youtu.be/PoLoiscfgMo',
        ];
    }
}
