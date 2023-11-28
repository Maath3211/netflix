<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date',
        'sexe',
        'photo',
        'realisateur',
        'producteur',
        'acteur',
    ];

    public function films(){
        return $this->belongsToMany(Film::class)->withPivot('film_id', 'personne_id');
    }




    public function filmRealises()
    {
        return $this->hasMany(Film::class,"realisateur_id");
    }
    public function filmProduits()
    {
        return $this->hasMany(Film::class,"producteur_id");
    }
}
