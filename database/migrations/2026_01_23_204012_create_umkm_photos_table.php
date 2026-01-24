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
    Schema::create('umkm_photos', function (Blueprint $table) {
        $table->id();
        // Foreign key menunjuk ke tabel umkms di skema yang sama
        $table->foreignId('umkm_id')->constrained('umkms')->onDelete('cascade');
        $table->string('photo_path');
        $table->string('caption')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_photos');
    }
};
