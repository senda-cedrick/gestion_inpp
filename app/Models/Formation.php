<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    public function vacation()
    {
        return $this->belongsTo(Vacation::class);
    }
}
