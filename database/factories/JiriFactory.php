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
        $random_time = ['8-12h & 17-20h', '9-12h & 13-16h', '8-12h'];

        return [
            'name'=>fake()->word(),
            'time'=>fake()->randomElement($random_time),
            'date'=> fake()->date(),
            'state'=>fake()->boolean([50]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
