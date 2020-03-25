<?php

use App\Shop\Brands\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Brand::class)->create([
            'name' => 'Apple',
            'name' => 'HP',
            'name' => 'Dell',
            'name' => 'Asus',
            'name' => 'Lenovo',
            'name' => 'Apple'

        ]);
    }
}