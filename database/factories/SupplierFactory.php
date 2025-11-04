<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'domain' => fake()->unique()->domainName(),
            'name' => fake()->company(),
            'country' => fake()->countryCode(),
            'description' => fake()->sentence(),
        ];
    }
}
