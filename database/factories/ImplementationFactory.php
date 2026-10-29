<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Homework;
use App\Models\Implementation;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ImplementationFactory extends Factory
{
    protected $model = Implementation::class;

    public function definition(): array
    {

        $contact_id =  Contact::exists() ? Contact::all()->pluck('id')->random() : Contact::factory()->create()->id;
        $homework_id =  Homework::exists() ? Homework::all()->pluck('id')->random() : Homework::factory()->create()->id;
/*        $score_id =  Score::exists() ? Score::all()->pluck('id')->random() : Score::factory()->create()->id;*/


        return [
            'project_url'=>fake()->url(),
            'contact_id'=>$contact_id,
            'homework_id'=>$homework_id,
            /*'score_id'=>$score_id,*/
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
