<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisTiket>
 */
class JenisTiketFactory extends Factory
{
    protected static array $jenisList = [
        'Gangguan Jaringan',
        'Gangguan Transmisi',
        'Gangguan Power',
        'Gangguan BTS',
        'Gangguan Fiber Optik',
        'Gangguan Core Network',
        'Peningkatan Kapasitas',
        'Pemeliharaan Rutin',
    ];

    protected static int $index = 0;

    public function definition(): array
    {
        $nama = self::$jenisList[self::$index % count(self::$jenisList)];
        self::$index++;

        return [
            'nama'            => $nama,
            'unit'            => null,
            'bobot_analisa'   => 0.50,
            'bobot_eskalasi'  => 0.30,
            'bobot_narasi'    => 0.20,
            'is_active'       => true,
        ];
    }
}
