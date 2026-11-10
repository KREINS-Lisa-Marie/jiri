<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Implementation;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ScoreFactory extends Factory
{
    protected $model = Score::class;

    public function definition(): array
    {
        $random_implementation = Implementation::exists() ? Implementation::all()->pluck('id')->random() : Implementation::factory()->create()->id;
        $random_contact= Contact::exists() ? Contact::all()->pluck('id')->random() : Contact::factory()->create()->id;

        return [
            'implementation_id' => $random_implementation,
            'contact_id' => $random_contact,
            'score' => fake()->randomFloat(2, 1, 20),
            'comment' => fake()->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
