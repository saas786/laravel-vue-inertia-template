<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /** The name of the factory's corresponding model. */
    protected $model = Phone::class;

    /** Define the model's default state. */
    public function definition()
    {
        return [
            'number' => $this->faker->e164PhoneNumber,
            'user_id' => count(Phone::all()) + 1,
        ];
    }
}
