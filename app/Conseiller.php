<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseiller extends Model
{
    protected $guarded = ['id'];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

    public function parcours()
    {
        return $this->hasMany(Parcours::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = strtoupper($value);
    }

    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = ucfirst($value);
    }
}
