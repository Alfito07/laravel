<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $units = ['NOC-L1', 'SBU'];
        $jabatanList = ['NOC-L1', 'NOC-L2', 'MOD', 'Quality Assurance', 'Internal'];

        return [
            'username'   => fake('id_ID')->name(),
            'email'      => fake()->unique()->safeEmail(),
            'password'   => static::$password ??= Hash::make('password'),
            'role'       => 'qa',
            'jabatan'    => fake()->randomElement($jabatanList),
            'unit'       => fake()->randomElement($units),
            'regional'   => fake('id_ID')->city(),
            'is_active'  => true,
            'last_login' => null,
            'remember_token' => Str::random(10),
        ];
    }

    /** State: superadmin */
    public function superadmin(): static
    {
        return $this->state(fn () => [
            'role'    => 'superadmin',
            'unit'    => null,
            'regional' => null,
        ]);
    }

    /** State: admin */
    public function admin(): static
    {
        return $this->state(fn () => ['role' => 'admin']);
    }

    /** State: supervisor */
    public function supervisor(): static
    {
        return $this->state(fn () => ['role' => 'supervisor']);
    }

    /** State: viewer */
    public function viewer(): static
    {
        return $this->state(fn () => ['role' => 'viewer']);
    }

    /** State: nonaktif */
    public function inactive(): static
    {
        return $this->state(fn () => ['is_active' => false]);
    }
}
