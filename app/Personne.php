<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $guarded = ['id'];

    public function parcours()
    {
        return $this->belongsToMany(Parcours::class);
    }

    public function organisations()
    {
        return $this->belongsToMany(Organisation::class);
    }

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom . ' - ' . $this->type;
    }
}
