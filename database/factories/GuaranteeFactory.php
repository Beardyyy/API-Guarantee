<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guarantee>
 */
class GuaranteeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'starts' => $this->faker->dateTime,
            'ends' => $this->faker->dateTime,
            'thumbnail' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph
        ];
    }
}
