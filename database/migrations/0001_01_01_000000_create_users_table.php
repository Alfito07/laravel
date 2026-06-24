<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Menggantikan default Laravel users table dengan struktur QA NOC.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100)->unique()->comment('Nama lengkap — dipakai untuk login');
            $table->string('email', 150)->nullable()->unique()->comment('Opsional, untuk reset password');
            $table->string('password')->comment('Hashed dengan Hash::make() Laravel');
            $table->enum('role', ['superadmin', 'admin', 'supervisor', 'qa', 'viewer'])
                  ->default('qa')
                  ->comment('Hak akses user dalam sistem');
            $table->string('jabatan', 100)->nullable()->comment('NOC-L1 | NOC-L2 | MOD | QA | Internal');
            $table->enum('unit', ['NOC-L1', 'SBU'])->nullable()->comment('NULL = bertanggung jawab semua unit');
            $table->string('regional', 100)->nullable()->comment('NULL = bertanggung jawab semua regional');
            $table->boolean('is_active')->default(true)->comment('false = akun dinonaktifkan');
            $table->timestamp('last_login')->nullable()->comment('Waktu login terakhir berhasil');
            $table->rememberToken();
            $table->timestamps(); // created_at & updated_at

            // Indexes
            $table->index('role', 'idx_users_role');
            $table->index('unit', 'idx_users_unit');
            $table->index('is_active', 'idx_users_active');
        });

        // Tabel bawaan Laravel untuk reset password
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Tabel bawaan Laravel untuk session management
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
