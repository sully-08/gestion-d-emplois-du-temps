<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Seance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_filiere';

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
   
   
    
}
