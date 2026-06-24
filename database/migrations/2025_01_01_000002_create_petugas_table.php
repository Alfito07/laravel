<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Master data teknisi / petugas lapangan yang dinilai.
     * Membutuhkan tabel regionals sudah ada.
     */
    public function up(): void
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50)->nullable()->unique()->comment('Nomor Induk Karyawan');
            $table->string('nama', 100)->comment('Nama lengkap petugas');
            $table->enum('unit', ['NOC-L1', 'SBU'])->comment('Unit penempatan petugas');
            $table->foreignId('regional_id')
                  ->constrained('regionals')
                  ->restrictOnDelete()
                  ->comment('Regional petugas');
            $table->string('site', 100)->nullable()->comment('Lokasi / site penempatan');
            $table->boolean('is_active')->default(true)->comment('false = sudah tidak aktif / resign');
            $table->timestamps();

            // Indexes
            $table->index(['unit', 'regional_id'], 'idx_petugas_unit_regional');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
