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
            'order' => 1,
            'category_id' => Category::factory(),
            'created' => now(),
            'version' => '1.0',
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(),
            'link_blog' => 'https://mungkhs.tistory.com/104',
            'link_youtube' => 'https://youtu.be/PoLoiscfgMo',
            'body' => '<p>'.implode('</p><p>', $this->faker->paragraphs(6)).'</p>',
        ];
    }
}
