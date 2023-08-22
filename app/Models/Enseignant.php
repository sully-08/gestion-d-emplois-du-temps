<?php

namespace App\Models;


use App\Models\Seance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ens';

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
