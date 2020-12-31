<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $fillable = ['nama_paket'];

    public function detPaket()
    {
        return $this->belongsTo('App\Models\Detpaket', 'id_paket', 'id');
    }
}