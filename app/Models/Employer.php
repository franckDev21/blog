<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // pour autorisee tous les champs
    protected $guarded = [];

    public function scopeUserNotAdmin($query)
    {
        return $query->where('role', 'user')->get();
    }

    /**
     * Permet de recuperer tous les Employers d'une entreprise
     */
    public function societe()
    {
        return $this->belongsTo('App\Models\Societe');
    }


}
