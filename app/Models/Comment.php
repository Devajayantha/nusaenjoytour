<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $fillable = ['name',
        'message',
        'status',
    ];

    public function getStatusPublishAttribute()
    {
        if ($this->status == '0') {
            return "unverified";
        }

        return "verified";
    }

    public function getIsStatusAttribute()
    {
        if ($this->status == '0') {
            return false;
        }

        return true;
    }
}
