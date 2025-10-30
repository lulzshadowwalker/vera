<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\Supplier;
use App\Models\User;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'reviewer_supplier_id' => Supplier::factory(),
            'reviewed_supplier_id' => Supplier::factory(),
            'user_id' => User::factory(),
            'deal_date' => fake()->date(),
            'country' => fake()->countryCode(),
            'cost' => fake()->numberBetween(1, 10),
            'speed' => fake()->numberBetween(1, 10),
            'communication' => fake()->numberBetween(1, 10),
            'reliability' => fake()->numberBetween(1, 10),
            'quality' => fake()->numberBetween(1, 10),
            'support' => fake()->numberBetween(1, 10),
            'flexibility' => fake()->numberBetween(1, 10),
            'innovation' => fake()->numberBetween(1, 10),
            'value' => fake()->numberBetween(1, 10),
            'timeliness' => fake()->numberBetween(1, 10),
            'deal_again' => fake()->boolean(),
            'comment' => fake()->regexify('[A-Za-z0-9]{160}'),
            'anonymous' => fake()->boolean(),
            'published' => fake()->boolean(),
        ];
    }
}
