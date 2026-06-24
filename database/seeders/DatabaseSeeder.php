<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Urutan seeder PENTING — tabel yang direferensikan FK harus di-seed lebih dulu.
     *
     * Urutan aman:
     *   1. users          (tidak ada FK keluar)
     *   2. regionals      (tidak ada FK keluar)
     *   3. jenis_tiket    (tidak ada FK keluar)
     *   4. petugas        (FK → regionals)
     *   5. (assessments, upload_batches, pending_tickets, activity_logs)
     *      → hanya diisi factory saat testing, bukan production seed
     */
    public function run(): void
    {
        // ── Master data wajib ada sebelum aplikasi digunakan ─────────────────
        $this->call([
            UserSeeder::class,       // Akun sistem (superadmin, admin, QA, dll)
            RegionalSeeder::class,   // Master regional / wilayah operasional
            JenisTiketSeeder::class, // Master jenis tiket & bobot penilaian
        ]);

        // ── Seed petugas hanya saat development / testing ────────────────────
        if (app()->isLocal() || app()->runningUnitTests()) {
            $this->call([
                PetugasSeeder::class,
            ]);
        }

        $this->command->info('✅ Database berhasil di-seed!');
        $this->command->table(
            ['Akun', 'Password'],
            [
                ['superadmin@qa-noc.id',     'SuperAdmin@2025'],
                ['admin.noc@qa-noc.id',      'Admin@2025'],
                ['admin.sbu@qa-noc.id',      'Admin@2025'],
                ['supervisor.noc@qa-noc.id', 'Supervisor@2025'],
                ['budi.santoso@qa-noc.id',   'QA@2025'],
                ['viewer@qa-noc.id',         'Viewer@2025'],
            ]
        );
    }
}
