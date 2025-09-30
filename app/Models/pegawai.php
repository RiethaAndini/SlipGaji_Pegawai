<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nip_pegawai';
    /** @var bool */
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nip_pegawai', 'nama', 'jabatan', 'golongan', 'unit_kerja'];

    // Relasi ke user
    public function user() {
        return $this->hasOne(User::class, 'nip_pegawai', 'nip_pegawai');
    }

    // Relasi ke Gaji
    public function gaji() {
        return $this->hasMany(Gaji::class, 'nip_pegawai', 'nip_pegawai');
    }

}
