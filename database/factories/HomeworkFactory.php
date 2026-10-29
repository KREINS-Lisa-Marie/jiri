<?php

namespace Database\Factories;

use App\Models\Criteria;
use App\Models\Homework;
use App\Models\Jiri;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class HomeworkFactory extends Factory
{
    protected $model = Homework::class;

    public function definition(): array
    {

        $project_id =  Project::exists() ? Project::all()->pluck('id')->random() : Project::factory()->create()->id;
        $jiri_id =  Jiri::exists() ? Jiri::all()->pluck('id')->random() : Jiri::factory()->create()->id;
        $criteria_id =  Criteria::exists() ? Criteria::all()->pluck('id')->random() : Criteria::factory()->create()->id;
        $weighting = rand(1, 100);

        return [
            'project_id'=>$project_id,
            'jiri_id'=>$jiri_id,
            'criteria_id'=>$criteria_id,
            'weighting'=>$weighting,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
