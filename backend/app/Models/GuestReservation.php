<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestReservation extends Model
{
    use HasFactory;
    protected $fillable = ['voyage_id', 'guest_id', 'nombre_de_passagers', 'date_reservation'];
}
