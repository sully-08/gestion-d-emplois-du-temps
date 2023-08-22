<?php

namespace App\Http\Controllers\LesFilieres;

use App\Models\Salle;
use App\Models\Module;
use App\Models\Filiere;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\EmploiDuTemps;
use App\Http\Controllers\Controller;

class CiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index()
    {
        $data = Filiere::all();
        $salle = Salle::all();
        $ens = Enseignant::all();
        $module = Module::all();
        // $emploi = EmploiDuTemps::all();
        $fil = EmploiDuTemps::all();
        // $cours = EmploiDuTemps::all();
        // $seance = EmploiDuTemps::all();
        $a = EmploiDuTemps::all();
        $b = EmploiDuTemps::all();
        $c = EmploiDuTemps::all();
        $d = EmploiDuTemps::all();
        $e = EmploiDuTemps::all();
        $f = EmploiDuTemps::all();
        $g = EmploiDuTemps::all();
        $h = EmploiDuTemps::all();
        $i = EmploiDuTemps::all();
        $j = EmploiDuTemps::all();
        $k = EmploiDuTemps::all();
        $l = EmploiDuTemps::all();
        $m = EmploiDuTemps::all();
        $n = EmploiDuTemps::all();
        $o = EmploiDuTemps::all();
        $p = EmploiDuTemps::all();
        $q = EmploiDuTemps::all();
        $r = EmploiDuTemps::all();
    
        return view('ci.index', [
            'data' =>$data,
             'fil' =>$fil,
             'a' =>$a,
             'b' =>$b,
             'c' =>$c,
             'd' =>$d,
             'e' =>$e,
            //  'emploi' =>$emploi,
            //    'seance' =>$seance, 
               'f' =>$f,
               'g' =>$g,
               'h' =>$h,
               'i' =>$i,
               'j' =>$j,
               'k' =>$k,
               'l' =>$l, 
            //    'cours' =>$cours, 
               'salle' =>$salle,
                'ens' =>$ens, 
                'm' =>$m,
                'n' =>$n,
                'o' =>$o,
                'p' =>$p,
                'q' =>$q,
                'r' =>$r,
                'module' =>$module ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
