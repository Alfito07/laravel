<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Master data wilayah / regional operasional.
     * Dibuat lebih awal karena direferensikan oleh tabel petugas & assessments.
     */
    public function up(): void
    {
        Schema::create('regionals', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->unique()->comment('Nama lengkap regional (ex: Jawa Barat)');
            $table->string('kode', 20)->nullable()->unique()->comment('Kode singkat (ex: JABAR)');
            $table->enum('unit', ['NOC-L1', 'SBU'])->nullable()->comment('NULL = berlaku untuk semua unit');
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regionals');
    }
};
