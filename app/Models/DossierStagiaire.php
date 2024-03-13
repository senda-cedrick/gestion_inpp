<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DossierStagiaire extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'date_confirmation',
        'num_dossier',
        'document_id',
        'stagiaire_id',
        'inscription_id',
        'tuteur_id',
        'reservation_id',
        'nationalite_id',
    ];
}
