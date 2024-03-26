<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['draw_status', 'draw_date'];
    protected $dates = ['draw_date'];

    public function userAuth()
    {
        return $this->belongsTo(UserAuth::class, 'userAuth_id');
    }

    public function userAuthd()
    {
        return $this->belongsTo(UserAuth::class, 'userAuth_id');
    }

}
