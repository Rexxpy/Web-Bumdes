<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = [
        'nama_kegiatan', 'deskripsi_kegiatan','tanggal','video_kegiatan'
    ];
    public function images()
    {
     return $this->hasMany('App\GambarKegiatan', 'id_kegiatan');
    }
}
