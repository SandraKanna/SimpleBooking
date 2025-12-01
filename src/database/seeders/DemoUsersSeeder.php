<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoUsersSeeder extends Seeder
{
    /**
     * Run the database seeds (initial data for tests).
     * To be activated in the DatabaseSeeder: php artisan db:seed --class=DemoUsersSeeder
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Agencia Demo',
            'email' => 'agency@example.com',
            'password' => bcrypt('password'),
            'role' => 'agency',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Cliente Demo',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}
