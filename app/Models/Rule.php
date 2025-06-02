<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'penyakit_id',
        'gejala_ids',
        'bobot'
    ];

    protected $casts = [
        'gejala_ids' => 'array'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function getGejalas()
    {
        return Gejala::whereIn('id', $this->gejala_ids)->get();
    }
}
