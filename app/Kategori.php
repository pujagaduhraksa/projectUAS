<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = ['pemeriksa_ujian', 'pengesahan_ujian', 'durasi_periksa', 'hari_pengerjaan', 'ttd'];
}
