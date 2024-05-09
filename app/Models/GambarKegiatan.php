<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarKegiatan extends Model
{
    protected $table = 'gambar_kegiatan';
    protected $fillable = [
        'id_kegiatan', 'galeri_kegiatan'
    ];
    public function product()
    {
        return $this->belongsTo('App\DataKegiatan', 'id_kegiatan');
    }
}
