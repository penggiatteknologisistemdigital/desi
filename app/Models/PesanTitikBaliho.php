<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesanTitikBaliho extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'pesan_titik_baliho';

    protected $fillable = [
        'baliho_id',
        'user_id',
        'instansi_id',
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }

            if (empty($model->kode_trans)) {
                $model->kode_trans = self::generateKodeTrans();
            }
        });
    }

    private static function generateKodeTrans()
    {
        // Format: BHL + YYYYMMDD + 4 random huruf/angka
        $prefix = 'BHL';
        $date = now()->format('Ymd');
        $random = strtoupper(Str::random(4));

        return "{$prefix}{$date}{$random}";
    }

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
