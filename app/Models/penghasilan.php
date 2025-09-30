<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penghasilan extends Model
{
    protected $table = 'detail_penghasilan';
    protected $fillable = ['id_gaji', 'id_komponen', 'nominal'];

    public function gaji()
    {
        return $this->belongsTo(Gaji::class, 'id_gaji', 'id_gaji');
    }
    //

    public function master()
    {
        return $this->belongsTo(Master::class, 'id_komponen', 'id_komponen');
    }
}
