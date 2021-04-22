<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Permet de recuperer tous les Employers d'une entreprise
     */
    public function employers(){
        return $this->hasMany('App\Models\Employer');
    }
}
