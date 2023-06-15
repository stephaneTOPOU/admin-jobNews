<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'entreprise',
        'site',
        'facebook',
        'twitter',
        'linkedin',
        'titre',
        'description',
        'mission',
        'profil',
        'dossier',
        'lien',
        'lieu',
        'libelle',
        'date_lim',
        'valide'
    ];

    public function Categorie()
    {
        return $this->hasOne(Categorie::class);
    }
}
