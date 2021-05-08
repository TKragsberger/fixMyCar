<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Address;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'zip_code' => Address::postcode(),
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
