<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Beneficiaire extends Model
{
    protected $fillable = ['nom', 'prenom', 'civilite', 'tel', 'email', 'adresse', 'code_postale', 'ville', 'region', 'pays', 'qpv'];

    public function parcours()
    {
        return $this->hasMany(Parcours::class);
    }

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = ucfirst($value);
    }

    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = ucfirst($value);
    }
}
