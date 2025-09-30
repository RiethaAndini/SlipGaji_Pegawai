<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table = 'gaji';
    protected $primaryKey = 'id_gaji';
    protected $fillable = ['nip_pegawai', 'periode', 'total_penghasilan', 'total_potongan', 'gaji_bersih'];

    // Relasi ke pegawai
    public function pegawai() {
        return $this->belongsTo(Pegawai::class, 'nip_pegawai', 'nip');
    }

    public function penghasilan() {
        return $this->hasMany(Penghasilan::class, 'id_gaji', 'id_gaji');
    }

    public function potongan() {
        return $this->hasMany(Potongan::class, 'id_gaji', 'id_gaji');
    }
}
