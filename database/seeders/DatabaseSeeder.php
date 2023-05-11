<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'role' => 'tour-guide',
            'name' => 'tour-guide',
            'email' => 'tg@example.com',
        ]);

        \App\Models\User::factory()->create([
            'role' => 'tourist',
            'name' => 'tourist',
            'email' => 't@example.com',
        ]);

        \App\Models\User::factory(8)->create();

        \App\Models\Artikel::factory(10)->create();

        \App\Models\Tour::factory(10)->create();

        \App\Models\Hotel::factory(10)->create();

        \App\Models\TourOrder::factory(10)->create();

        \App\Models\Rating::factory(50)->create();
    }
}
