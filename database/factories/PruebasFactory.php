<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PruebasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        // $user_id = factory(App\Models\User::class)->create();

        return [
            'title' => $this->faker->unique()->sentence(),
            'expert' => $this->faker->realText($maxNumChars = 50),
            'body' => $this->faker->text(),
            'image_path' => $this->faker->imageUrl(640, 480),
            'is_published' => 1,
            'min_to_read' => $this->faker->numberBetween(1,10)

        ];
    }
}
