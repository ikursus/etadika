<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $fillable = [
        'tarikh_permohonan',
        'nama_pelajar',
        'gambar',
        'warganegara',
        'no_kp',
        'sijil_lahir',
        'tarikh_lahir',
        'jantina',
        'alamat',
        'status'
    ];
}
