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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id');
            $table->string('nama_tamu');
            $table->string('no_hp_tamu');
            $table->integer('jumlah_tamu');
            $table->string('detail_asal');
            $table->string('asal');
            $table->text('keperluan');
            $table->date('tanggal');
            $table->foreignId('id_waktu');
            $table->string('plat_mobil')->nullable();
            $table->string('no_surat_tugas')->nullable();
            $table->text('file_surat_tugas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
