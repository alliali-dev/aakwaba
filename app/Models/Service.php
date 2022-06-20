<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = [
        'libelleservice', 'description', 'typeservice', 'hotels_id',
    ];

    public function getHotel()
    {
        return $this->belongsTo(HotelModel::class, 'hotels_id');
    }
}