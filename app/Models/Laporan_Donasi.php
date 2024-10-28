<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_Donasi extends Model
{
    use HasFactory;

    protected $table = 'laporan_donasi';
    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'periode_awal',
        'periode_akhir',
        'total_donasi',
        'total_distribusi',
        'catatan',
    ];
}
