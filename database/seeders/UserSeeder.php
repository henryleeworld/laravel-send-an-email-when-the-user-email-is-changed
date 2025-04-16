<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => __('Administrator'),
            'email' => 'admin@admin.com',
        ]);
        User::factory(10)->create();
    }
}
