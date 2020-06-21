<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $guarded = ['id'];

    public function setModeleAttribute($value)
    {
        $this->attributes['modele'] = mb_strtolower($value);
    }

    public function getModeleAttribute($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }

    public function setChampAttribute($value)
    {
        $this->attributes['champ'] = mb_strtolower($value);
    }

    public function getChampAttribute($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }

    public function setLibelleAttribute($value)
    {
        $this->attributes['libelle'] = mb_strtolower($value);
    }

    public function getLibelleAttribute($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
}
