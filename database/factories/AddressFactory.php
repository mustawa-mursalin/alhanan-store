<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Order;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'street_address' => $this->faker->text(),
            'province' => $this->faker->word(),
            'city' => $this->faker->city(),
            'district' => $this->faker->word(),
            'village' => $this->faker->word(),
            'zip_code' => $this->faker->word(),
        ];
    }
}
