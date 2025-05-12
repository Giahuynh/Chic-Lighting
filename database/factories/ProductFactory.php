<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true) . ' Light',
            'price' => $this->faker->randomFloat(2, 50, 500),
            'quantity' => $this->faker->numberBetween(1, 100),
            'is_active' => $this->faker->boolean(80), // 80% là active
            'brand_id' => Brand::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}
