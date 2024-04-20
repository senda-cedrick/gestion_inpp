<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }
}
