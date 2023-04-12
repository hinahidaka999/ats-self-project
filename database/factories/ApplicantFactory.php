<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return     [
            'name' => fake()->name(),
            'age' => fake()->randomNumber(2),
            'occupation' => 'sales',
            'applicant_route' => 'wantedly',
            'current_affiliation' => fake()->company(),
            'final_education' => 'university',
            'tel' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'resume',
            'cv',
            'other_file',
            'career',
            'link',
            'memo'
        ];
    }
}
