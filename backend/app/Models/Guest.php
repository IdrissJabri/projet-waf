<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'num_tel',
        'email',
        'voyages_id',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
