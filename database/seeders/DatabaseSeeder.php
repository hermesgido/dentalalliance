<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate([
            'email' => 'programs@da4ea.com',
        ], [
            'name' => 'DA4EA Admin',
            'password' => '@ProgramsAdmin',
            'is_admin' => true,
        ]);
    }
}
