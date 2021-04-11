<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /** The name of the factory's corresponding model. */
    protected $model = Address::class;

    /** Define the model's default state. */
    public function definition()
    {
        return [
            'street' => $this->faker->streetName,
            'complement' => null,
            'number' => $this->faker->buildingNumber,
            'neighborhood' => $this->faker->cityPrefix,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'zip' => $this->faker->postcode,
            'user_id' => count(Address::all()) + 1,
        ];
    }
}
