<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $random_user =  User::exists() ? User::all()->pluck('id')->random() : User::factory()->create()->id;

        return [
            'user_id'=>$random_user,
            'name'=>fake()->word(),
            'state'=>fake()->boolean(50),
            'specifications'=>fake()->url(),
            'project_information'=>fake()->paragraph(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
