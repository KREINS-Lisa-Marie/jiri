<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Contact;
use App\Models\Jiri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition(): array
    {
        $contact_id =  Contact::exists() ? Contact::all()->pluck('id')->random() : Contact::factory()->create()->id;

        $jiri_id =  Jiri::exists() ? Jiri::all()->pluck('id')->random() : Jiri::factory()->create()->id;

        $random_role = rand(0, 1) ? true : false;


        return [
            'contact_id' => $contact_id,
            'jiri_id' => $jiri_id,
            'role' =>$random_role ,
            'token' => Str::random(32),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
