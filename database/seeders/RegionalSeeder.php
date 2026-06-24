<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalSeeder extends Seeder
{
    public function run(): void
    {
        $regionals = [
            ['nama' => 'DKI Jakarta',        'kode' => 'JKRT',   'unit' => null],
            ['nama' => 'Jawa Barat',          'kode' => 'JABAR',  'unit' => null],
            ['nama' => 'Jawa Tengah',         'kode' => 'JATENG', 'unit' => null],
            ['nama' => 'Jawa Timur',          'kode' => 'JATIM',  'unit' => null],
            ['nama' => 'Banten',              'kode' => 'BANTEN', 'unit' => null],
            ['nama' => 'Sumatera Utara',      'kode' => 'SUMUT',  'unit' => null],
            ['nama' => 'Sumatera Barat',      'kode' => 'SUMBAR', 'unit' => null],
            ['nama' => 'Sumatera Selatan',    'kode' => 'SUMSEL', 'unit' => null],
            ['nama' => 'Riau',                'kode' => 'RIAU',   'unit' => null],
            ['nama' => 'Kepulauan Riau',      'kode' => 'KEPRI',  'unit' => null],
            ['nama' => 'Kalimantan Barat',    'kode' => 'KALBAR', 'unit' => null],
            ['nama' => 'Kalimantan Timur',    'kode' => 'KALTIM', 'unit' => null],
            ['nama' => 'Kalimantan Selatan',  'kode' => 'KALSEL', 'unit' => null],
            ['nama' => 'Sulawesi Selatan',    'kode' => 'SULSEL', 'unit' => null],
            ['nama' => 'Sulawesi Utara',      'kode' => 'SULUT',  'unit' => null],
            ['nama' => 'Bali',                'kode' => 'BALI',   'unit' => null],
            ['nama' => 'Nusa Tenggara Barat', 'kode' => 'NTB',    'unit' => null],
            ['nama' => 'Papua',               'kode' => 'PAPUA',  'unit' => null],
        ];

        foreach ($regionals as $regional) {
            DB::table('regionals')->insertOrIgnore([
                ...$regional,
                'is_active'  => true,
                'created_at' => now(),
            ]);
        }
    }
}
