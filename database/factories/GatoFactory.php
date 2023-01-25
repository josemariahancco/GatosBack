<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gato>
 */
class GatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'raza_id' =>rand(1,50),
            'name' =>$this->faker->sentence($nbWord=1,$variableNbWords=true),
            'date_of_birth' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' =>$this->faker->randomElement(['MACHO','HEMBRA']),
            'photo' =>'https://placekitten.com/g/80/60',
        ];
    }
}
