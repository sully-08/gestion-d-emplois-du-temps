<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EnseignantController extends Controller
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
      /*  if (!Gate::allows('access-admin'))
        {
                abort ('403');
        }
        */

       $data['enseignants'] = Enseignant::orderBy('id_ens','asc')->paginate(15);
            return view('enseignants.index', $data);  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enseignants.create');
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
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required',
            'specialite' => 'required'
         
            ]);
            $enseignant = new Enseignant;
            $enseignant->nom = $request->nom;
            $enseignant->prenoms = $request->prenoms;
            $enseignant->email = $request->email;
            $enseignant->specialite = $request->specialite;
          
            $enseignant->save();
            return redirect()->route('enseignants.index')
            ->with('success','enseignant has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_ens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('enseignant.show',compact('enseignant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_ens
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit',compact('enseignant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_ens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required',
            'specialite' => '',
          
            ]);
            $enseignant = Enseignant::find($id);
            $enseignant->nom = $request->nom;
            $enseignant->prenoms = $request->prenoms;
            $enseignant->email = $request->email;
            $enseignant->specialite = $request->specialite;
            $enseignant->save();
            return redirect()->route('enseignants.index')
            ->with('success','enseignant Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->route('enseignants.index')
        ->with('success','enseignant has been deleted successfully');
    }
}
