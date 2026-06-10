<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    protected $table = 'riwayat'; // 🔥 INI YANG PENTING

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'pekerjaan',
        'jk',
        'usia',
        'tb',
        'bb',
        'sistolik',
        'diastolik',
        'nadi',
        'pernapasan',
        'hasil'
    ];
}
