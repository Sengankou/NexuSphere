<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Subcategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accesslink>
 */
class AccesslinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'subcategory_id' => Subcategory::factory(),
            'name' => $this->faker->word,
            'url' => $this->faker->url,
            'display_order' => $this->faker->numberBetween(1, 1000),
            'favorite' => $this->faker->boolean,
        ];
    }
}
