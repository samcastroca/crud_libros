<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
