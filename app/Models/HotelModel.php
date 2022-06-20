<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    use HasFactory;
    protected $table = "hotels";
    protected $fillable = [
        'nom',
        'adresse',
        'telreserve',
        'telhotel',
        'email',
        'localisation',
        'nombrechambre',
        'typechambre',
        'equipement',
        'menuplat',
        'ouverture',
        'fermeture',
        'autre',
        'commentaire',
        'photo',
        'photochambre',
        'created_at',
        'updated_at',
        'classes_id',
    ];
}