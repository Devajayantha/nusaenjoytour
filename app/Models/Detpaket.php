<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detpaket extends Model
{
    use HasFactory;

    protected $table = 'detpaket';

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id','id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'pax','id');
    }
}
