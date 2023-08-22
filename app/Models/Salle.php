<?php

namespace App\Models;

use App\Models\Emploi;
use App\Models\Seance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salle extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_salle';

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
