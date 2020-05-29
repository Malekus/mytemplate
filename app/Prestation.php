<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    protected $guarded = ['id'];

    public function parcour()
    {
        return $this->belongsTo(Parcours::class);
    }

    public function rendezvous()
    {
        return $this->hasMany(Rdv::class);
    }
}
