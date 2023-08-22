<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Module;
use App\Models\Seance;
use App\Models\Filiere;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\EmploiDuTemps;

class SeanceController extends Controller
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
    
        return view('seances.index', [
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
        $salle = Salle::all();
        $data = Filiere::all();
        $ens = Enseignant::all();
        $module = Module::all();
        return view('seances.create', ['salle' =>$salle,'data' =>$data, 'ens' =>$ens, 'module'=>$module]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jour' => 'required',
            'hdebut' => 'required',
            'hfin' => 'required',
            'type' => '',
            'salle' => 'required',
            'enseignant' => 'required',
            'module' => 'required',
            'filiere' => '',
      
            ]);
            $emploi = new EmploiDuTemps;
            $emploi->jour = $request->jour;   
            $emploi->hdebut = $request->hdebut;  
            $emploi->hfin = $request->hfin;               
            $emploi->type = $request->type;
            $emploi->salle = $request->salle;
            $emploi->enseignant = $request->enseignant;
            $emploi->module = $request->module;
            $emploi->filiere = $request->filiere;
           
          
            $emploi->save();
            return redirect()->route('seances.create')
            ->with('success','seance has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('seances.show',compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploiDuTemps $emploi)
    {
        return view('seances.edit',compact('emploi'));
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
        $request->validate([
            'jour' => 'required',
            'hdebut' => 'required',
            'hfin' => 'required',
            'type' => 'required',
            'salle' => 'required',
            'enseignant' => 'required',
            'module' => 'required',
          
            ]);
            $emploi = new EmploiDuTemps;
            $emploi->jour = $request->jour;   
            $emploi->hdebut = $request->hdebut;  
            $emploi->hfin = $request->hfin;               
            $emploi->type = $request->type;
            $emploi->salle = $request->salle;
            $emploi->enseignant = $request->enseignant;
            $emploi->module = $request->module;
            $emploi->save();
            return redirect()->route('seances.index')
            ->with('success','seance has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $seance = EmploiDuTemps::all();
        foreach ($seance as $seance){
        $seance->delete();
    }
        return redirect()->route('seances.index')
        ->with('success','Retablie avec success');
    }
}
