<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mahasinalsharq.com',
            'password' => Hash::make('password'), // Change this to a secure password
            'email_verified_at' => now(),
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@mahasinalsharq.com');
        $this->command->info('Password: password');
        $this->command->warn('Please change the password after first login!');
    }
}
