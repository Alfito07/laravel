<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            // ── Superadmin ──────────────────────────────────────────────────
            [
                'username'  => 'Super Admin',
                'email'     => 'superadmin@qa-noc.id',
                'password'  => Hash::make('SuperAdmin@2025'),
                'role'      => 'superadmin',
                'jabatan'   => 'System Administrator',
                'unit'      => null,
                'regional'  => null,
                'is_active' => true,
            ],
            // ── Admin ────────────────────────────────────────────────────────
            [
                'username'  => 'Admin NOC',
                'email'     => 'admin.noc@qa-noc.id',
                'password'  => Hash::make('Admin@2025'),
                'role'      => 'admin',
                'jabatan'   => 'Quality Assurance',
                'unit'      => 'NOC-L1',
                'regional'  => null,
                'is_active' => true,
            ],
            [
                'username'  => 'Admin SBU',
                'email'     => 'admin.sbu@qa-noc.id',
                'password'  => Hash::make('Admin@2025'),
                'role'      => 'admin',
                'jabatan'   => 'Quality Assurance',
                'unit'      => 'SBU',
                'regional'  => null,
                'is_active' => true,
            ],
            // ── Supervisor ───────────────────────────────────────────────────
            [
                'username'  => 'Supervisor NOC',
                'email'     => 'supervisor.noc@qa-noc.id',
                'password'  => Hash::make('Supervisor@2025'),
                'role'      => 'supervisor',
                'jabatan'   => 'Supervisor QA',
                'unit'      => 'NOC-L1',
                'regional'  => null,
                'is_active' => true,
            ],
            // ── QA User ──────────────────────────────────────────────────────
            [
                'username'  => 'Budi Santoso',
                'email'     => 'budi.santoso@qa-noc.id',
                'password'  => Hash::make('QA@2025'),
                'role'      => 'qa',
                'jabatan'   => 'Quality Assurance',
                'unit'      => 'NOC-L1',
                'regional'  => 'DKI Jakarta',
                'is_active' => true,
            ],
            [
                'username'  => 'Siti Rahayu',
                'email'     => 'siti.rahayu@qa-noc.id',
                'password'  => Hash::make('QA@2025'),
                'role'      => 'qa',
                'jabatan'   => 'Quality Assurance',
                'unit'      => 'NOC-L1',
                'regional'  => 'Jawa Barat',
                'is_active' => true,
            ],
            [
                'username'  => 'Agus Widodo',
                'email'     => 'agus.widodo@qa-noc.id',
                'password'  => Hash::make('QA@2025'),
                'role'      => 'qa',
                'jabatan'   => 'Quality Assurance',
                'unit'      => 'SBU',
                'regional'  => 'Jawa Timur',
                'is_active' => true,
            ],
            // ── Viewer ───────────────────────────────────────────────────────
            [
                'username'  => 'Manager Laporan',
                'email'     => 'viewer@qa-noc.id',
                'password'  => Hash::make('Viewer@2025'),
                'role'      => 'viewer',
                'jabatan'   => 'MOD',
                'unit'      => null,
                'regional'  => null,
                'is_active' => true,
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insertOrIgnore([
                ...$user,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
