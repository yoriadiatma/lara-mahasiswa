<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'nim' => $this->faker->randomNumber(5, true),
            'nama' => $this->faker->name(),
            'jurusan_kode' => $this->faker->randomElement(['001', '002']),
            'alamat' => $this->faker->streetAddress(),
            'jeniskelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'no_hp' => $this->faker->phoneNumber(),
            'foto' => $this->faker->lexify('?????.jpg'),
            'email' => $this->faker->email()
        ];
    }
}
