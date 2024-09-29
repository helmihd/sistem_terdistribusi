<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perkuliahan', function (Blueprint $table) {
            $table->id(); // id akan otomatis auto-increment
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_matkul');
            $table->timestamps(); // Opsional, bisa dihapus jika tidak perlu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkuliah');
    }
};
