<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * Classe qui va stocker mes requetes autoirs
 * de ma table movies
 * Hérite de ma super classe Model
 */
class Actors extends Model{

    /**
     * Décrit le nom de la table
     * que classe fait référence
     */
    protected $table = 'actors';



    public function movies()
    {
        return $this->hasMany('\App\Http\Model\Movies');
    }







}



