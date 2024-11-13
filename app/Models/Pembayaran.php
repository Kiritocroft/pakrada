<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'Pembayarans';

    protected $fillable = [
        'siswa_id',
        'jumlah',
        'tanggal_pembayaran',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }


}