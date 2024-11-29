<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'materi_siswa_id',
        'kisikisi',
    ];
    public function data_materi(){
        return $this->belongsTo(DataMateri::class);
    }
}
