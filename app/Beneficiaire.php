<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Beneficiaire extends Model
{
    //protected $fillable = ['nom', 'prenom', 'civilite', 'tel', 'email', 'adresse', 'code_postal', 'ville', 'region', 'pays', 'qpv'];
    protected $guarded = ['id'];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

    public function parcours()
    {
        return $this->hasManyThrough(Parcours::class, Projet::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = mb_strtolower($value);
    }

    public function getNomAttribute($value)
    {
        return strtoupper($value);
    }

    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = mb_strtolower($value);
    }

    public function getPrenomAttribute($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
}
