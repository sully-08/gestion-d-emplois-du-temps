<?php

namespace App\Models;


use App\Models\Salle;
use App\Models\Module;
use App\Models\Filiere;
use App\Models\Enseignant;
use App\Models\EmploiDuTemps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seance extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_seance';

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }

    public function emploi()
    {
        return $this->belongsTo(EmploiDuTemps::class);
    }
}
