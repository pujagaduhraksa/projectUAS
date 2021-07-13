<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $table = 'exam';
    protected $fillable = ['mata_pelajaran', 'nama_pengawas', 'durasi_ujian', 'hari_pelaksanaan', 'pembuat_soal', 'kategori_id'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
