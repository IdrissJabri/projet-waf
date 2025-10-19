<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a default admin user
        Admin::firstOrCreate(
            ['email' => 'admin@tadkirati.ma'],
            [
                'username' => 'admin',
                'password' => Hash::make('password123'),
            ]
        );

        // Create additional admin users
        Admin::firstOrCreate(
            ['email' => 'manager@tadkirati.ma'],
            [
                'username' => 'manager',
                'password' => Hash::make('password123'),
            ]
        );
    }
}
