<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // ✅ Bắt buộc phải có dòng này

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition(): array
    {
        $name = $this->faker->company;

        return [
            'name' => $name,
            'label' => Str::slug($name), // tạo slug như "apple-inc"
        ];
    }
}
