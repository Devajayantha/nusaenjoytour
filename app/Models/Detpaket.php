<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detpaket extends Model
{
    use HasFactory;

    public function paket()
    {
        return $this->hasMany('App\Models\Paket', 'id_paket');
    }
}