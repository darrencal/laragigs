<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user
        $user = User::factory()
            ->create([
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
            ]);

        // Create listings with the created user as owner
        Listing::factory()
            ->count(6)
            ->create([
                'user_id' => $user->id,
            ]);
    }
}
