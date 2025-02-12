<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Termwind\Components\Li;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'testexample@mail.com'
         ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    Listing::factory(10)->create([
        'user_id' => $user->id
    ]);
    }
}
