<?php

namespace Database\Factories;

use App\Models\Criteria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CriteriaFactory extends Factory
{
    protected $model = Criteria::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
