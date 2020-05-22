<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $guarded = ['id'];

    public function conseiller()
    {
        return $this->belongsTo(Conseiller::class);
    }

    public function parcours()
    {
        return $this->hasMany(Parcours::class);
    }

    public function beneficiaire()
    {
        return $this->belongsTo(Beneficiaire::class);
    }

    public function getFullNameAttribute()
    {
        return $this->intitule . ' ' . $this->activite;
    }
}
