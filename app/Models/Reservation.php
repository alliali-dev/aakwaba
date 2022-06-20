<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $incrementations = true;
    protected $table = "reservations";
    protected $fillable = [
        'datearrive',
        'datedepart',
        'nombrejours',
        'montantreservation',
        'statutreservation'
    ];
}