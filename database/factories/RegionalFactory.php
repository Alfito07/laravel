<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Regional>
 */
class RegionalFactory extends Factory
{
    // Data regional nyata agar seed terasa realistis
    protected static array $regionals = [
        ['nama' => 'DKI Jakarta',      'kode' => 'JKRT'],
        ['nama' => 'Jawa Barat',       'kode' => 'JABAR'],
        ['nama' => 'Jawa Tengah',      'kode' => 'JATENG'],
        ['nama' => 'Jawa Timur',       'kode' => 'JATIM'],
        ['nama' => 'Sumatera Utara',   'kode' => 'SUMUT'],
        ['nama' => 'Sumatera Selatan', 'kode' => 'SUMSEL'],
        ['nama' => 'Kalimantan Timur', 'kode' => 'KALTIM'],
        ['nama' => 'Sulawesi Selatan', 'kode' => 'SULSEL'],
        ['nama' => 'Bali',             'kode' => 'BALI'],
        ['nama' => 'Papua',            'kode' => 'PAPUA'],
    ];

    protected static int $index = 0;

    public function definition(): array
    {
        $data = self::$regionals[self::$index % count(self::$regionals)];
        self::$index++;

        return [
            'nama'      => $data['nama'],
            'kode'      => $data['kode'],
            'unit'      => null, // berlaku untuk semua unit
            'is_active' => true,
        ];
    }
}
