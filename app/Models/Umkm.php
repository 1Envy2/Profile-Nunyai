<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    // Menunjuk ke skema khusus di PostgreSQL
    protected $table = 'umkms';

    protected $fillable = [
        'owner_name',
        'business_name',
        'address',
        'contact',
        'category',
        'description',
        'operational_hours',
        'payment_method',
        'google_maps_status',
        'store_photo',
        'owner_photo',
    ];

    /**
     * Relasi ke banyak foto produk (Galeri)
     */
    public function photos()
    {
        return $this->hasMany(UmkmPhoto::class, 'umkm_id');
    }

    /**
     * Relasi ke banyak link platform/sosmed
     */
    public function links()
    {
        return $this->hasMany(UmkmLink::class, 'umkm_id');
    }
}