<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_umkms_table.php
public function up(): void
{
    // Pastikan skema umkm_data sudah dibuat di PostgreSQL (CREATE SCHEMA umkm_data)
    Schema::create('umkms', function (Blueprint $table) {
        $table->id();
        $table->string('owner_name');
        $table->string('business_name');
        $table->string('address');
        $table->string('contact');
        $table->string('category');
        $table->text('description');
        $table->string('operational_hours')->nullable();
        $table->string('payment_method')->nullable();
        $table->string('google_maps_status')->nullable();
        $table->string('store_photo')->nullable();
        $table->string('owner_photo')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
