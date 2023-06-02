<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'nom',
        'description',
        'mission',
        'profil',
        'dossier',
        'lieu',
        'lien',
        'date_lim',
        'libelle'
    ];

    public function Categorie()
    {
        return $this->hasOne(Categorie::class);
    }
}
