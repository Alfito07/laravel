<?php

namespace Database\Factories;

use App\Models\Regional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petugas>
 */
class PetugasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nik'         => fake()->unique()->numerify('##########'),
            'nama'        => fake('id_ID')->name(),
            'unit'        => fake()->randomElement(['NOC-L1', 'SBU']),
            'regional_id' => Regional::inRandomOrder()->value('id') ?? Regional::factory(),
            'site'        => 'Site ' . strtoupper(fake()->lexify('???')),
            'is_active'   => true,
        ];
    }
}
