<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Log setiap sesi upload file Excel tiket pending.
     * Dibuat SEBELUM pending_tickets karena pending_tickets mereferensikannya.
     */
    public function up(): void
    {
        Schema::create('upload_batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_code', 60)->unique()->comment('Kode unik (ex: BATCH-NOC-20250601-001)');
            $table->enum('unit', ['NOC-L1', 'SBU']);
            $table->foreignId('uploaded_by')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->comment('User yang melakukan upload');
            $table->string('filename', 255)->nullable()->comment('Nama file Excel asli');
            $table->integer('total_rows')->default(0)->comment('Total baris dalam file');
            $table->integer('success_rows')->default(0)->comment('Baris berhasil diimport');
            $table->integer('failed_rows')->default(0)->comment('Baris gagal / duplikat');
            $table->enum('status', ['success', 'partial', 'failed'])->default('success');
            $table->text('note')->nullable()->comment('Keterangan tambahan / error message');
            $table->timestamp('created_at')->useCurrent();

            // Indexes
            $table->index('uploaded_by', 'idx_batch_uploader');
            $table->index('unit', 'idx_batch_unit');
            $table->index('created_at', 'idx_batch_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('upload_batches');
    }
};
