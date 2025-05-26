<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $categories = [
            [
                'name' => 'Fiction',
                'description' => 'Fictional books'
            ],
            [
                'name' => 'Non-Fiction',
                'description' => 'Non-Fictional books'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
