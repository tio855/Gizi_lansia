<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('status_gizi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status'); // Kurang, Normal, Lebih
            $table->text('deskripsi')->nullable();
            $table->text('solusi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_gizi');
    }
};
