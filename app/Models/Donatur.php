<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';
    protected $primaryKey = 'id_donatur';

    protected $fillable = [
        'nama_donatur',
        'email',
        'nomor_telepon',
        'alamat',
        'tanggal_terdaftar',
    ];

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'id_donatur');
    }
}
