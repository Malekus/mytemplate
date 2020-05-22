<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescripteur extends Model
{
    protected $guarded = ['id'];

    public function parcours()
    {
        return $this->hasMany(Parcours::class);
    }

    public function referent()
    {
        return $this->belongsTo(Referent::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = strtoupper($value);
    }
}
