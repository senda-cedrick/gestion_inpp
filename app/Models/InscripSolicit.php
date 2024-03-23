<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InscripSolicit extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'stagiaire_id',
        'filiere_id',
        'option_id'
    ];

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
