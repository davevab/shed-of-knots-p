<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Webmozart\Assert\Tests\StaticAnalysis\boolean;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $product_name = fake()->name;
        return [
            'product_name' => $product_name,
            'slug' => Str::slug($product_name),
            'image' =>fake()->imageUrl,
            'description' => fake()->paragraph,
            'price' => fake()->randomDigitNotNull,
            'active' => fake()->boolean(),
            'published_at' => fake()->dateTime,
        ];
    }
}
