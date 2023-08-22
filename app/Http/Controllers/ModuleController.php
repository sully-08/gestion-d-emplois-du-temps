<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
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
            $data['module'] = Module::orderBy('id_module','asc')->paginate(15);
            return view('module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.create');
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
                'intitule' => 'required',
                'coeff' => 'required',
                'vhCT' => 'required',
                'vhTD' => 'required',
                'vhTP' => 'required',
            ]);
            $mod = new Module;
            $mod->intitule = $request->intitule;
            $mod->coeff = $request->coeff;
            $mod->vhCT = $request->vhCT;
            $mod->vhTD = $request->vhTD;
            $mod->vhTP = $request->vhTP;
            $mod->save();
            return redirect()->route('module.index')
            ->with('success','module has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('module.show',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('module.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idmod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'intitule' => 'required',
            'coeff' => 'required',
            'vhCT' => '',
            'vhTD' => '',
            'vhTP' => '',
            ]);
            $mod = Module::find($id);
            $mod->intitule = $request->intitule;
            $mod->coeff = $request->coeff;
            $mod->vhCT = $request->vhCT;
            $mod->vhTD = $request->vhTD;
            $mod->vhTP = $request->vhTP;
            $mod->save();
            return redirect()->route('module.index')
            ->with('success','module Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('module.index')
        ->with('success','Module has been deleted successfully');
    }
}
