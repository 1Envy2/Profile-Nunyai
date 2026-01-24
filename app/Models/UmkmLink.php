<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmLink extends Model
{
    use HasFactory;
    
    protected $table = 'umkm_links';

    protected $fillable = [
        'umkm_id',
        'platform_name',
        'url',
    ];

    /**
     * Relasi balik ke UMKM
     */
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}