<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\Products;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders_detail>
 */
class Orders_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Order_id' => Orders::all()->random()->order_id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'product_id' => Products::all()->random()->product_id,
            'quantily' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2, 1, 100)
        ];
    }
}
