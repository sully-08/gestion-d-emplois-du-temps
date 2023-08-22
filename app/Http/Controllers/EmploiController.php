<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class EmploiController extends Controller
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
      
      //  return view('emplois.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('emplois.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function store(Request $request)
    {
        $request->validate([
            'jour' => 'required',
            'salle' => 'required',
            'enseignant' => 'required',
            'module' => 'required'
         
            ]);
            $emploi = new Emploi;
            $emploi->jour = $request->jour;
            $emploi->salle = $request->salle;
            $emploi->enseignant = $request->enseignant;
            $emploi->module = $request->module;
          
            $emploi->save();
            return redirect()->route('emplois.index');
    }
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('emplois.show',compact('emploi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('emplois.edit',compact('emploi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function update(Request $request, $id)
    {
        $request->validate([
            'jour' => 'required',
            'salle' => 'required',
            'enseignant' => 'required',
            'module' => 'required',
          
            ]);
            $emploi = Emploi::find($id);
            $emploi->jour = $request->jour;
            $emploi->salle = $request->salle;
            $emploi->enseignant = $request->enseignant;
            $emploi->module = $request->module;
            $emploi->save();
            return redirect()->route('emplois.index');
    }
    */

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
