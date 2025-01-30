<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coche;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Coche::query();
        $request->has('marca');
       
        if ($request->has('marca')) {
            $marcaParaFiltrar = $request->marca;
            $query->where('marca', 'like', '%'.$marcaParaFiltrar.'%');
        }
        $coches = $query->get();
        return view('coches', compact('coches'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearcoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'matricula' => 'required'
        ]);
        Coche::create($request->all());
        return redirect()->route('coches.index')->with('success', 'Coche creado');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coche = Coche::findOrFail($id);
       return view('mostrarcoche', compact('coche'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche = Coche::findOrFail($id);
        return view('editarcoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coche = Coche::findOrFail($id);
        $coche->update($request->all());
        return redirect()->route('coches.show', $coche->id)->with('success', 'Coche actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coche = Coche::findOrFail($id);
        $coche->delete();
    
        return redirect()->route('coches.index')->with('success', 'Coche eliminado correctamente');
    }
}
