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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyakit_id');
            $table->json('gejala_ids'); // Array ID gejala
            $table->integer('bobot')->default(100);
            $table->timestamps();

            $table->foreign('penyakit_id')->references('id')->on('penyakits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
