<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Audit trail semua aksi penting dalam sistem.
     * Menggunakan bigInteger karena volume record bisa sangat tinggi.
     */
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Bigint karena volume record tinggi');
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->restrictOnDelete();
            $table->enum('action', [
                'login',
                'logout',
                'create_assessment',
                'update_assessment',
                'revise_assessment',
                'delete_assessment',
                'upload_batch',
                'create_user',
                'update_user',
                'deactivate_user',
            ])->comment('Jenis aksi yang dilakukan');
            $table->string('target_table', 50)->nullable()->comment('Nama tabel yang dipengaruhi');
            $table->unsignedBigInteger('target_id')->nullable()->comment('ID record yang dipengaruhi');
            $table->json('payload')->nullable()->comment('Data before/after dalam format JSON');
            $table->string('ip_address', 45)->nullable()->comment('IP Address user (support IPv6)');
            $table->string('user_agent', 255)->nullable()->comment('Browser & device info');
            $table->timestamp('created_at')->useCurrent();

            // Indexes
            $table->index('user_id', 'idx_log_user');
            $table->index('action', 'idx_log_action');
            $table->index('target_table', 'idx_log_table');
            $table->index('created_at', 'idx_log_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
