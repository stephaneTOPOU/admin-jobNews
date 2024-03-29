<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Categorie extends Model
{
    use HasFactory;
    use Sluggable;

    public function Sluggable():array
    {
        return [

            'slug'=>[
                'source'=> 'nom'
            ]
        ];
    }

    protected $fillable = [
        'nom',
        'slug',
        'libelle'
    ];

    public function Offre()
    {
        return $this->hasMany(Offre::class);
    }
}
