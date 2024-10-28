<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima_Manfaat extends Model
{
    use HasFactory;

    protected $table = 'penerima_manfaat';
    protected $primaryKey = 'id_penerima';

    protected $fillable = [
        'nama_penerima',
        'kategori_penerima',
        'alamat',
        'kontak',
        'keterangan',
    ];

    public function pendistribusians()
    {
        return $this->hasMany(Pendistribusian::class, 'id_penerima');
    }
}
