<?php

namespace Database\Factories;

use App\Models\Jiri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class JiriFactory extends Factory
{
    protected $model = Jiri::class;

    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'time'=>fake()->time(),
            'date'=> fake()->date(),
            'state'=>fake()->boolean([50]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
