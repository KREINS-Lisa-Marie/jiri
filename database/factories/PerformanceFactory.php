<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PerformanceFactory extends Factory
{
    protected $model = Performance::class;

    public function definition(): array
    {

        $random_contact = Contact::exists() ? Contact::all()->pluck('id')->random() : Contact::factory()->create()->id;
        $random_jiri = Jiri::exists() ? Jiri::all()->pluck('id')->random() : Jiri::factory()->create()->id;


        return [
            'contact_id' => $random_contact,
            'jiri_id' => $random_jiri,
            'first_score' => fake()->randomFloat(2, 1, 20),
            'second_score' => fake()->randomFloat(2, 1, 20),
            'final_score' => fake()->randomFloat(2, 1, 20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
