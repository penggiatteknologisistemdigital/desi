<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Enums\UkuranBaliho;
use App\Enums\LayoutBaliho;

class Baliho extends Model
{
    use HasFactory;

    protected $table = 'tbl_baliho';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_baliho',
        'lokasi_baliho',
        'foto_baliho',
        'ukuran_baliho',
        'layout_baliho',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function pesanMesi()
    {
        return $this->hasMany(PesanMesi::class, 'lokasi_id');
    }
}
