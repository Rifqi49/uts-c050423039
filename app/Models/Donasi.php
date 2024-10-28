<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';
    protected $primaryKey = 'id_donasi';

    protected $fillable = [
        'id_donatur',
        'tanggal_donasi',
        'jumlah_donasi',
        'metode_pembayaran',
        'status_donasi',
        'catatan',
    ];

    public function donatur()
    {
        return $this->belongsTo(Donatur::class, 'id_donatur');
    }

    public function pendistribusians()
    {
        return $this->hasMany(Pendistribusian::class, 'id_donasi');
    }
}
