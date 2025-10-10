<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class PesanBaliho extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tbl_pesan_baliho';

    protected $fillable = [
        'baliho_id',
        'user_id',
        'instansi_id',
        'role_id',  //ini diambil dari tabel user?
        'kode_trans',
        'tanggal_mulai',
        'tanggal_selesai',
        'keterangan_event',
        'upload_surat',
        'no_surat',
        'tgl_surat',
        'perihal_surat',
        'upload_desain',
        'upload_lepas_baliho',
        'nama_pic',
        'tlp_pic',
        'status_pakai',
    ];

    // Relasi dengan tabel Baliho
    public function baliho()
    {
        return $this->belongsTo(Baliho::class);
    }

    // Relasi dengan tabel User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan tabel Instansi
    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }

    // Relasi dengan tabel DetailTransPesan
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransPesan::class, 'kode_trans_fk', 'kode_trans');
    }

}
