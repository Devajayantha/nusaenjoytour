<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table ='booking';

    protected $fillable = ['name',
        'email',
        'booking_no',
        'telp',
        'address',
        'departure',
        'pax',
        'amount',
        'message',
    ];

    public function detPaket()
    {
        return $this->belongsTo(Detpaket::class, 'pax', 'id');
    }
}
