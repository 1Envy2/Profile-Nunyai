<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmPhoto extends Model
{
    use HasFactory;

    // Menunjuk ke skema umkm_data
    protected $table = 'umkm_photos';

    protected $fillable = [
        'umkm_id',
        'photo_path',
        'caption',
    ];

    /**
     * Relasi balik ke UMKM
     */
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}