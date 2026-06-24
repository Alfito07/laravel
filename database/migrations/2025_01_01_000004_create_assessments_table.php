<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Tabel utama penilaian QA.
     *
     * Kolom `total` dan `grade` adalah GENERATED COLUMN MySQL —
     * nilainya dihitung OTOMATIS oleh database, tidak perlu diisi dari PHP.
     *
     * Formula:
     *   total = ROUND(nilai_analisa*0.5 + nilai_eskalasi*0.3 + nilai_narasi*0.2, 2)
     *   grade = A (>=8) | B (>=6.5) | C (>=5) | D (<5)
     */
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();

            // Relasi
            $table->foreignId('qa_id')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->comment('QA yang melakukan penilaian');
            $table->foreignId('petugas_id')
                  ->constrained('petugas')
                  ->restrictOnDelete()
                  ->comment('Petugas yang dinilai');
            $table->foreignId('regional_id')
                  ->constrained('regionals')
                  ->restrictOnDelete();
            $table->foreignId('jenis_tiket_id')
                  ->nullable()
                  ->constrained('jenis_tiket')
                  ->nullOnDelete()
                  ->comment('NULL jika jenis tidak ada di master');

            // Info tiket
            $table->enum('unit', ['NOC-L1', 'SBU']);
            $table->date('tanggal')->comment('Tanggal penilaian dilakukan');
            $table->tinyInteger('week')->unsigned()->comment('ISO week number (1-53)');
            $table->tinyInteger('bulan')->unsigned()->comment('Bulan 1-12 (disimpan eksplisit untuk performa query laporan)');
            $table->smallInteger('tahun')->unsigned()->comment('Tahun (ex: 2025)');
            $table->string('idtiket', 50)->comment('Nomor tiket (ex: INC0012345)');

            // Nilai komponen
            $table->decimal('nilai_analisa', 4, 2)->comment('CHECK 0.00–10.00');
            $table->string('kat_analisa', 50)->nullable()->comment('Kategori kualitatif analisa');
            $table->decimal('nilai_eskalasi', 4, 2)->comment('CHECK 0.00–10.00');
            $table->string('kat_eskalasi', 50)->nullable()->comment('Kategori kualitatif eskalasi');
            $table->decimal('nilai_narasi', 4, 2)->comment('CHECK 0.00–10.00');
            $table->string('kat_narasi', 50)->nullable()->comment('Kategori kualitatif narasi');

            // GENERATED COLUMN — ditambahkan via raw SQL setelah Schema::create
            // (Blueprint belum support GENERATED COLUMN secara native)

            $table->text('catatan')->nullable()->comment('Feedback dari QA');

            // Revisi oleh supervisor
            $table->boolean('is_revised')->default(false)->comment('true = pernah direvisi supervisor');
            $table->foreignId('revised_by')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete()
                  ->comment('Supervisor yang merevisi');
            $table->timestamp('revised_at')->nullable();
            $table->text('revisi_catatan')->nullable()->comment('Alasan revisi dari supervisor');

            $table->timestamps();

            // Indexes
            $table->unique(['idtiket', 'unit'], 'uq_tiket_unit');
            $table->index(['unit', 'tanggal'], 'idx_unit_tanggal');
            $table->index(['bulan', 'tahun', 'unit'], 'idx_laporan_bulanan');
            $table->index('petugas_id', 'idx_petugas');
            $table->index('regional_id', 'idx_regional');
            $table->index('qa_id', 'idx_qa');
        });

        // ── GENERATED COLUMNS (raw SQL karena Blueprint belum support) ──────────
        DB::statement('
            ALTER TABLE assessments
            ADD COLUMN total DECIMAL(4,2)
                GENERATED ALWAYS AS (
                    ROUND(nilai_analisa * 0.5 + nilai_eskalasi * 0.3 + nilai_narasi * 0.2, 2)
                ) STORED
                COMMENT "Weighted average — dihitung otomatis MySQL"
                AFTER nilai_narasi
        ');

        DB::statement('
            ALTER TABLE assessments
            ADD COLUMN grade CHAR(1)
                GENERATED ALWAYS AS (
                    CASE
                        WHEN ROUND(nilai_analisa * 0.5 + nilai_eskalasi * 0.3 + nilai_narasi * 0.2, 2) >= 8.00 THEN "A"
                        WHEN ROUND(nilai_analisa * 0.5 + nilai_eskalasi * 0.3 + nilai_narasi * 0.2, 2) >= 6.50 THEN "B"
                        WHEN ROUND(nilai_analisa * 0.5 + nilai_eskalasi * 0.3 + nilai_narasi * 0.2, 2) >= 5.00 THEN "C"
                        ELSE "D"
                    END
                ) STORED
                COMMENT "Grade otomatis: A>=8 | B>=6.5 | C>=5 | D<5"
                AFTER total
        ');

        // CHECK CONSTRAINTS untuk validasi batas nilai di level database
        DB::statement('ALTER TABLE assessments ADD CONSTRAINT chk_nilai_analisa   CHECK (nilai_analisa  BETWEEN 0 AND 10)');
        DB::statement('ALTER TABLE assessments ADD CONSTRAINT chk_nilai_eskalasi  CHECK (nilai_eskalasi BETWEEN 0 AND 10)');
        DB::statement('ALTER TABLE assessments ADD CONSTRAINT chk_nilai_narasi    CHECK (nilai_narasi   BETWEEN 0 AND 10)');

        // Index pada generated column grade
        DB::statement('ALTER TABLE assessments ADD INDEX idx_grade (grade)');
    }

    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
