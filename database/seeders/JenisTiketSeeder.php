<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisTiketSeeder extends Seeder
{
    public function run(): void
    {
        $jenis = [
            // NOC-L1
            ['nama' => 'Gangguan Jaringan',       'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            ['nama' => 'Gangguan Transmisi',       'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            ['nama' => 'Gangguan Power',           'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            ['nama' => 'Gangguan BTS',             'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            ['nama' => 'Gangguan Fiber Optik',     'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            ['nama' => 'Gangguan Core Network',    'unit' => 'NOC-L1', 'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
            // SBU
            ['nama' => 'Peningkatan Kapasitas',    'unit' => 'SBU',    'bobot_analisa' => 0.40, 'bobot_eskalasi' => 0.35, 'bobot_narasi' => 0.25],
            ['nama' => 'Pemeliharaan Preventif',   'unit' => 'SBU',    'bobot_analisa' => 0.40, 'bobot_eskalasi' => 0.35, 'bobot_narasi' => 0.25],
            ['nama' => 'Commissioning',            'unit' => 'SBU',    'bobot_analisa' => 0.40, 'bobot_eskalasi' => 0.35, 'bobot_narasi' => 0.25],
            // Umum
            ['nama' => 'Eskalasi Vendor',          'unit' => null,     'bobot_analisa' => 0.50, 'bobot_eskalasi' => 0.30, 'bobot_narasi' => 0.20],
        ];

        foreach ($jenis as $item) {
            DB::table('jenis_tiket')->insertOrIgnore([
                ...$item,
                'is_active'  => true,
                'created_at' => now(),
            ]);
        }
    }
}
