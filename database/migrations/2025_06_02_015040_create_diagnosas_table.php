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
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->json('gejala_terpilih'); // Array ID gejala yang dipilih
            $table->json('hasil_diagnosa'); // Array hasil dengan tingkat kepercayaan
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosas');
    }
};
