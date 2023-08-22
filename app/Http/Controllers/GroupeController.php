<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
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
        $data['groupes'] = Groupe::orderBy('id_gr','asc')->paginate(5);
        return view('groupes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupes.create');
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
            'libelle' => 'required',
          
            ]);
            $groupe = new Groupe;
            $groupe->libelle = $request->libelle;
          
            $groupe->save();
            return redirect()->route('groupes.index')
            ->with('success','groupe has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('groupes.show',compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Groupe $groupe)
    {
        return view('groupes.edit',compact('groupe'));
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
            'libelle' => 'required',
           
          
            ]);
            $groupe = Groupe::find($id);
            $groupe->libelle = $request->libelle;
           
            $groupe->save();
            return redirect()->route('groupes.index')
            ->with('success','groupe Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupe $groupe)
    {
        $groupe->delete();
        return redirect()->route('groupes.index')
        ->with('success','groupe has been deleted successfully');
    }
}
