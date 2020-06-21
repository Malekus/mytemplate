<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $guarded = ['id'];

    public function parcours()
    {
        return $this->belongsToMany(Parcours::class, 'organisation_parcour', 'organisation_id', 'parcour_id');
    }

    public function personnes()
    {
        return $this->belongsToMany(Personne::class);
    }

}
