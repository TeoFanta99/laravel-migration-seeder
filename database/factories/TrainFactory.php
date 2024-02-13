<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company(),
            'stazione_di_partenza' => fake() -> city(),
            'stazione_di_arrivo' => fake() -> city(),
            'orario_di_partenza' => fake() -> dateTimeBetween('-1 week', '+1 week' ),
            'orario_di_arrivo' => fake() -> dateTimeBetween('-1 week', '+1 week' ),
            'codice_treno' => fake() -> randomNumber(5, true),
            'numero_di_carrozze' => fake() -> randomDigit(),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean(),
        ];
    }
}
