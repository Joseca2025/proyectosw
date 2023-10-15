<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
          

            /* Moda */
            [
                'category_id' => 1,
                'name' => 'ropa',
                'slug' => Str::slug('ropa'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'calzados',
                'slug' => Str::slug('calzados'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'accesorios',
                'slug' => Str::slug('accesorios'),
            ],

         
        ];

        foreach ($subcategories as $subcategory) {
            

            Subcategory::create($subcategory);

        }
    }
}
