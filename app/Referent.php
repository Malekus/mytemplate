<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referent extends Model
{
    protected $guarded = ['id'];

    public function prescripteurs()
    {
        return $this->hasMany(Prescripteur::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = mb_strtoupper($value, 'UTF-8');
    }

    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = ucfirst($value);
    }
}
