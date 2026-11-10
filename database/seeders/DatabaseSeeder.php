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

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);

        Project::factory(5)->create(['user_id'=>$user->id]);
        Criteria::factory(5)->create();
        Contact::factory(5)->create(['archived' => false]);
        Contact::factory(5)->create(['archived' => true]);
        Jiri::factory(5)->create([
            'user_id'=>$user->id,
        ]);

        Homework::factory(5)->create();
        Attendance::factory(5)->create();
        Implementation::factory(5)->create();

        $evaluators = Contact::take(5)->get();
        $implementations = Implementation::all();

        foreach($implementations as $implementation){
            foreach($evaluators as $evaluator) {
                Score::factory([
                    'implementation_id' => $implementation->id,
                    'contact_id' => $evaluator->id,
                ])->create();
            }
        }

        Performance::factory(5)->create();

    }
}
