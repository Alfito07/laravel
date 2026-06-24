<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Master jenis tiket beserta bobot penilaiannya.
     * Bobot bisa berbeda per jenis tiket — fleksibel tanpa ubah kode.
     */
    public function up(): void
    {
        Schema::create('jenis_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->unique()->comment('Nama jenis tiket');
            $table->enum('unit', ['NOC-L1', 'SBU'])->nullable()->comment('NULL = berlaku untuk semua unit');
            $table->decimal('bobot_analisa', 4, 2)->default(0.50)->comment('Bobot nilai analisa (default 50%)');
            $table->decimal('bobot_eskalasi', 4, 2)->default(0.30)->comment('Bobot nilai eskalasi (default 30%)');
            $table->decimal('bobot_narasi', 4, 2)->default(0.20)->comment('Bobot nilai narasi (default 20%)');
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jenis_tiket');
    }
};
