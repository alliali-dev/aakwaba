<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;
    public $incrementations = true;
    protected $table = "prestations";
    protected $fillable = ['libelleprestation', 'descriptionprestation', 'datprestation',];
}