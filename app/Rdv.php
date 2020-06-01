<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $guarded = ['id'];

    /*
    protected $fillable = [
        'date_rdv',
        'heure_debut',
        'heure_fin',
        'libelle',
        'status',
        'motif_abs',
        'rang_rdv',
        'rang_rdv_p'
    ];
    */

    public function prestation()
    {
        return $this->belongsTo(Prestation::class);
    }

    public function conseiller()
    {
        return $this->belongsTo(Conseiller::class);
    }
/*
    public function scopeNbRdv($q, $id)
    {
        return $q->where('prestation_id', $id)->count();
    }
    */

    public function getNbRdv(){
        return $this->prestation->rendezvous->count();
    }

    /*
    public function setNomAttribute($value)
    {
        $this->attributes['rang'] =
    }
*/
}
