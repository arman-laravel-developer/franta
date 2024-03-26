<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
