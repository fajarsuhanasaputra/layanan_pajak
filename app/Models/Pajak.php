<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    protected $fillable = [
        'perusahaan',
        'penanggung_jawab',
        'jenis_pajak',
        'total_pembayaran',
    ];
}