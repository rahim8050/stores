<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create([
            'title' => 'Test Listing',
            'tags' => 'test, listing',
            'company' => 'Test Company',
            'location' => 'Test Location',
            'email' => 'joseph@gmail.com',
            'website' => 'https://example.com',
            'description' => 'This is a test listing.', 
        ]);
        Listing::create([
            'title' => 'Test Listing 2',
            'tags' => 'test, listing',
            'company' => 'Test Company',
            'location' => 'Test Location',
            'email' => 'kamau@gmail.com',
            'website' => 'https://example.com',
            'description' => 'This is a test listing.',
        ]);
    }
}
