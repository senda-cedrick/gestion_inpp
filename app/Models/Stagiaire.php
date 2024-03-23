<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stagiaire extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'coordonner_id',
        'user_id',
        'date_nais',
        'lieu_nais',
        'nationalite',
        'nbr_enfant',
        'nom_conjoint',
        'nom_stagiaire',
        'num_carte_stag',
        'num_passeport',
        'num_carte_elect',
        'pays_nais',
        'postnom_stag',
        'prenom_stag',
        'sexe_stg',
        'status_stag',
    ];

    public function coordonneer()
    {
        return $this->hasMany(Coordonner::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
