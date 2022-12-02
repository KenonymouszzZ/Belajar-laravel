<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'nama'=> $faker->name(),
            'nis'=> $faker->randomNumber(4,true),
            'umur'=>$faker->numberBetween(12,20),
            'alamat'=>$faker->address(),
            'jeniskelamin'=> $faker->randomElement(['pria','wanita']),
            'class_id'=> $faker->numberBetween(1,4),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
