<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendistribusian extends Model
{
    use HasFactory;

    protected $table = 'pendistribusian';
    protected $primaryKey = 'id_distribusi';

    protected $fillable = [
        'id_donasi',
        'id_penerima',
        'tanggal_distribusi',
        'jumlah_distribusi',
        'keterangan',
    ];

    public function donasi()
    {
        return $this->belongsTo(Donasi::class, 'id_donasi');
    }

    public function penerimaManfaat()
    {
        return $this->belongsTo(Penerima_Manfaat::class, 'id_penerima');
    }
}
