<?php

namespace Database\Seeders;

use App\Models\Petugas;
use App\Models\Regional;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Seed contoh petugas — hanya untuk development & testing.
     * Data production petugas diisi via upload Excel oleh admin.
     */
    public function run(): void
    {
        // Pastikan ada regional dulu
        if (Regional::count() === 0) {
            $this->call(RegionalSeeder::class);
        }

        // Buat 20 petugas NOC-L1 dan 10 petugas SBU
        Petugas::factory(20)->create(['unit' => 'NOC-L1']);
        Petugas::factory(10)->create(['unit' => 'SBU']);

        $this->command->info('✅ 30 data petugas (dev) berhasil dibuat.');
    }
}
