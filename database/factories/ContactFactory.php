<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {


        $random_user = User::exists() ? User::all()->pluck('id')->random() : User::factory()->create()->id;

        $random_archived = rand(0, 1) ? true : false;

        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => fake()->unique()->safeEmail(),
            'user_id' => $random_user,
            'archived_at' => $random_archived,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
