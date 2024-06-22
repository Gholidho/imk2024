<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'layanan';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'icon',
        'judul_layanan',
        'deskripsi',
        'slug',
        'persyaratan',
        'mekanisme_prosedur',
        'biaya_tarif',
        'produk_pelayanan'
    ];

    public function judulLayanan()
    {
        return $this->belongsTo(KategoriBerita::class, 'judul_layanan');
    }
}
