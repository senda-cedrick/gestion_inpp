<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'attestation_diplome',
        'attestation_med',
        'attestation_nationalite',
        'bonne_vie_moeurs',
        'bulletins',
        'bulletins2',
        'stagiaire_id',
        'photo_pass',
    ];
}
