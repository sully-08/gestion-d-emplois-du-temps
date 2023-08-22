<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
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
        $data['filieres'] = Filiere::orderBy('id_filiere','asc')->paginate(15);
        return view('filieres.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filieres.create');
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
            'nomfil' => 'required',
            'cycle' => 'required',
            ]);
            $filiere = new Filiere;
            $filiere->nomfil = $request->nomfil;
            $filiere->cycle = $request->cycle;
            $filiere->save();
            return redirect()->route('filieres.index')
            ->with('success','filiere has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idfil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('filieres.show',compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
       // return view('filieres.edit',compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomfil' => 'required',
            'cycle' => 'required',
          
            ]);
            $filiere = Filiere::find($id);
            $filiere->nomfil = $request->nomfil;
            $filiere->cycle = $request->cycle;
            $filiere->save();
            return redirect()->route('filieres.index')
            ->with('success','filiere Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return redirect()->route('filieres.index')
        ->with('success','filiere has been deleted successfully');
    }
}
