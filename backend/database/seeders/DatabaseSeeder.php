<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed basic data first
        $this->call([
            VilleSeeder::class,
            AgenceSeeder::class,
            VoyageSeeder::class,
        ]);

        $this->command->info('Database seeded successfully with Moroccan travel data!');
    }
}
