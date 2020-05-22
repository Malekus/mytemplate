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
}
