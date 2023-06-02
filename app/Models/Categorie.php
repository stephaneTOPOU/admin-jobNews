<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'libelle'
    ];

    public function Offre()
    {
        return $this->hasMany(Offre::class);
    }
}
