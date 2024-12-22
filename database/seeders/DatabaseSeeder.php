<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Greeting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Greeting::create(['greeting' => 'Hello']);
        Greeting::create(['greeting' => 'Hi']);
        Greeting::create(['greeting' => 'Howdy']);
        Greeting::create(['greeting' => 'Hey']);

    }
}
