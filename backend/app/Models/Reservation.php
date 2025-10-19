<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_de_passagers',
        'date_reservation',
        'voyage_id',
        'user_id'
    ];

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
