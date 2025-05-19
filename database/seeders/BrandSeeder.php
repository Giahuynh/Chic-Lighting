<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'PHILIPS',
            'OSRAM',
            'CREE',
            'ZUMTOBEL',
            'GENERAL ELECTRIC (GE)',
            'NICHIA',
            'PANASONIC',
            'BRIDGELUX',
        ];

        foreach ($brands as $name) {
            $slug = Str::slug($name);
            Brand::create([
                'name' => $name,
                'label' => $slug,
                'logo' => "images/brands/logo_$slug.png", // logo file path (optional)
            ]);
        }
    }
}
