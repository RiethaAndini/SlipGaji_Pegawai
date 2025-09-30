<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class potongan extends Model
{
    protected $table = 'detail_potongan';
    protected $fillable = ['id_gaji', 'id_komponen', 'nominal'];

    //Relasi ke gaji
    public function gaji()
    {
        return $this->belongsTo(Gaji::class, 'id_gaji', 'id_gaji');
    }

    //Relasi ke Master 
    public  function master()
    {
        return $this->belongsTo(Master::class, 'id_komponen', 'id');
    }
}
