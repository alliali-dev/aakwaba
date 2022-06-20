<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\HotelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambre extends Model
{
    use HasFactory;
    protected $table = "chambres";
    protected $fillable = [
        'numerochambre',
        'numeroetage',
        'telephonechambre',
        'equipements',
        'Vent',
        'photochambre',
        'prixchambre',
        'statutchambre',
        'categories_id',
        'hotels_id',
        'created_at',
        'updated_at',
    ];

    public function hotelFromChambre()
    {
        return $this->belongsToMany(HotelModel::class);
    }

    public function hotelFromCategorie()
    {
        return $this->belongsToMany(Categorie::class);
    }
}