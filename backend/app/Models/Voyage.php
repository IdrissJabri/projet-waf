<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'titre',
        'agence_id',
        'ville_id',
        'places_id',
        'depart',
        'ligne_fr',
        'ligne_ar',
        'active',
    ];

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function places()
    {
        return $this->belongsTo(Places::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
