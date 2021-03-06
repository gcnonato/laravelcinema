<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Classe qui va stocker mes requetes autoirs
 * de ma table movies
 * Hérite de ma super classe Model.
 */
class Comments extends Model
{
    /**
     * Décrit le nom de la table
     * que classe fait référence.
     */
    protected $table = 'comments';

    /**
     *  Return the average of notes.
     */
    public function getAvgNote()
    {
        $results = DB::table('comments')
            ->select(DB::raw('ROUND(AVG(note)) as avgnote'))
            ->first();

        return $results;
    }

    /* RELATIONS */

    public function movies()
    {
        return $this->belongsTo('\App\Http\Models\Movies');
    }

    public function user()
    {
        return $this->belongsTo('\App\Http\Models\User');
    }
}
