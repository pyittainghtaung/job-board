<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Piotr Jura',
            'email' => 'piotr@jura.com'
        ]);

        \App\Models\User::factory(300)->create();

        // Shuffling user list with shuffle method
        $users = \App\Models\User::all()->shuffle();

        for ($i = 0; $i < 20; $i++) {
            // pop() method work like that
            // $collection = collect([1, 2, 3, 4, 5]);

            // Remove and retrieve the last item
            // $lastItem = $collection->pop(); // $lastItem = 5

            // Collection now contains [1, 2, 3, 4]
            // ************************************************************************
            // Pop() method select an item from list and remove that item from the list
            \App\Models\Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();
        for ($i = 0; $i < 100; $i++) {
            \App\Models\Job::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }
        // \App\Models\Job::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
