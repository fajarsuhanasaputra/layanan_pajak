<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    protected $fillable = [
        'perusahaan',
        'user_id',
        'penanggung_jawab',
        'jenis_pajak',
        'verifikasi',
        'pembayaran',
        'total_pembayaran',
    ];
}