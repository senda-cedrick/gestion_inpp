<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nationalite extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'nationalite_congo',
        'nationalite_afrique',
        'resident_congo',
        'titulaire_bac',
        'cycle_licence',
        'user_id'
    ];
}
