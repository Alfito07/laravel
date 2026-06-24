<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Antrian tiket dari upload Excel yang menunggu dinilai.
     * Membutuhkan: users, petugas, regionals, jenis_tiket, upload_batches, assessments
     */
    public function up(): void
    {
        Schema::create('pending_tickets', function (Blueprint $table) {
            $table->id();
            $table->enum('unit', ['NOC-L1', 'SBU']);
            $table->string('idtiket', 50)->comment('Nomor tiket dari file Excel');

            // Relasi ke master petugas (nullable — bisa jadi nama belum terdaftar)
            $table->foreignId('petugas_id')
                  ->nullable()
                  ->constrained('petugas')
                  ->nullOnDelete()
                  ->comment('NULL jika petugas belum ada di master');
            $table->string('petugas_raw', 100)->nullable()->comment('Nama petugas mentah dari Excel — backup jika petugas_id NULL');

            $table->foreignId('regional_id')
                  ->nullable()
                  ->constrained('regionals')
                  ->nullOnDelete();
            $table->foreignId('jenis_tiket_id')
                  ->nullable()
                  ->constrained('jenis_tiket')
                  ->nullOnDelete();

            $table->date('tanggal_qa')->nullable()->comment('Tanggal rencana penilaian');

            // QA yang ditugaskan (nullable = siapa saja bisa ambil)
            $table->foreignId('assigned_to')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete()
                  ->comment('NULL = semua QA bisa mengambil tiket ini');

            $table->enum('status', ['pending', 'on_review', 'done', 'cancelled'])->default('pending');
            $table->enum('priority', ['high', 'normal', 'low'])->default('normal');

            // Relasi ke batch upload asal
            $table->foreignId('batch_id')
                  ->constrained('upload_batches')
                  ->restrictOnDelete()
                  ->comment('Batch upload sumber tiket ini');

            // Relasi ke assessment hasil penilaian (diisi setelah selesai)
            $table->foreignId('assessment_id')
                  ->nullable()
                  ->unique()
                  ->constrained('assessments')
                  ->nullOnDelete()
                  ->comment('Diisi otomatis setelah tiket selesai dinilai');

            $table->timestamp('done_at')->nullable()->comment('Waktu tiket berhasil diselesaikan');
            $table->timestamps();

            // Indexes
            $table->index(['status', 'unit'], 'idx_status_unit');
            $table->index('assigned_to', 'idx_assigned_to');
            $table->index('batch_id', 'idx_batch');
            $table->index('priority', 'idx_priority');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pending_tickets');
    }
};
