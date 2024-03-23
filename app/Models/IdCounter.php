<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCounter extends Model
{
    use HasFactory;
    protected $fillable = ['current_year'];
    
    public function stagiare(){
        return $this->hasOne(Stagiaire::class);
    }
}
