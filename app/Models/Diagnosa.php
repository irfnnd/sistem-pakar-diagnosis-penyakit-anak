<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pasien',
        'umur',
        'jenis_kelamin',
        'gejala_terpilih',
        'hasil_diagnosa'
    ];

    protected $casts = [
        'gejala_terpilih' => 'array',
        'hasil_diagnosa' => 'array'
    ];
}
