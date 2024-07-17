<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Student;
=======
>>>>>>> b72506c860d6f1e2e2f2aa6bb99086ef4e040a8c
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        Student::factory()->count(30)->create();

=======
>>>>>>> b72506c860d6f1e2e2f2aa6bb99086ef4e040a8c
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
