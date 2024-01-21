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
        \App\Models\User::factory()->create(['email'=> 'leandro@app.com']);
        \App\Models\User::factory(9)->create();
        \App\Models\category::factory(9)->create();
    }
}
