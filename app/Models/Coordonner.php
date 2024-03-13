<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordonner extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'adresse_complete',
        'code_postal',
        'district',
        'email',
        'mobil',
        'mobil_fixe',
        'pays',
        'province'
    ];
}
