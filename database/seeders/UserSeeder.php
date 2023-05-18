<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $trainerRole = Role::where('name', 'trainer')->first();

        // Create 10 users but only the first 2 are trainer.
        User::factory()
            ->count(2)
            ->create()
            ->each(fn ($user) => $user->roles()->attach($trainerRole));

        User::factory()
            ->count(8)
            ->create();
    }
}
