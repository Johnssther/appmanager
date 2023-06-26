<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class  ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'names' => $this->faker->firstName(), //genera un nombre de persona
            'surnames' => $this->faker->lastName(), //genera un apellido de persona
            'phone' => $this->faker->phoneNumber(), //genera un número de teléfono aleatorio
            'email' => $this->faker->unique()->safeEmail(), //genera una dirección de correo electrónico única
            'description' => $this->faker->text(),
            'status' => $this->faker->numberBetween(1, 3)
        ];
    }
}
