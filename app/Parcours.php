<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
    protected $guarded = ['id'];

    public function beneficiaire()
    {
        return $this->belongsTo(Beneficiaire::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function conseiller()
    {
        return $this->belongsTo(Conseiller::class);
    }

    public function prescripteur()
    {
        return $this->belongsTo(Prescripteur::class);
    }

    public function prestations()
    {
        return $this->hasMany(Prestation::class);
    }
}
