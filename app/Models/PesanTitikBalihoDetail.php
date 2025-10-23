<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesanTitikBalihoDetail extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pesan_titik_baliho_detail';

    protected $fillable = [
        'kode_trans_fk',
        'tanggal',
        'baliho_id',
    ];

    public function pesan()
    {
        return $this->belongsTo(PesanTitikBaliho::class, 'kode_trans_fk', 'kode_trans');
    }
}
