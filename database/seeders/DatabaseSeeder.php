<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Contact;
use App\Models\Criteria;
use App\Models\Homework;
use App\Models\Implementation;
use App\Models\Jiri;
use App\Models\Performance;
use App\Models\Project;
use App\Models\Score;
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
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);

        Project::factory(5)->create();
        Criteria::factory(5)->create();
        Contact::factory(5)->create();
        Jiri::factory(5)->create();

        Homework::factory(5)->create();
        Attendance::factory(5)->create();
        Implementation::factory(5)->create();
        Score::factory(5)->create();
        Performance::factory(5)->create();

    }
}
