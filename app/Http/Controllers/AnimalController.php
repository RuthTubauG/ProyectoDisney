<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    // INICIO
    function home(){
        return view('home' , ['web' => 'Disney']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        // Ponemos animal.list porque hay una carpeta animal y dentro de esta el list.blade
        return view('animal.list', compact('animals', 'animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ponemos animal.create porque hay una carpeta animal y dentro de esta el create.blade
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtNombre'=>'required',
            'txtRaza'=>'required',
            'txtDescripcion'=>'required',
            'txtImagen'=>'required'
        ]);

        $animal = new Animal([
            'nombre'=> $request->get('txtNombre'),
            'raza'=> $request->get('txtRaza'),
            'descripcion'=> $request->get('txtDescripcion'),
            'imagen'=> $request->get('txtImagen')
        ]);

        $animal->save();
        return redirect('/animal')->with('success', 'Personaje añadido correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        // Ponemos animal.view porque hay una carpeta animal y dentro de esta el view.blade
        return view('animal.view', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        // Ponemos animal.edit porque hay una carpeta animal y dentro de esta el edit.blade
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'txtNombre'=>'required',
            'txtRaza'=>'required',
            'txtDescripcion'=>'required',
            'txtImagen'=>'required'
        ]);

        $animal->nombre = $request->get('txtNombre');
        $animal->raza = $request->get('txtRaza');
        $animal->descripcion = $request->get('txtDescripcion');
        $animal->imagen = $request->get('txtImagen');

        $animal->update();
        return redirect('/animal')->with('success', 'Personaje actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect('/animal')->with('success', 'Personaje eliminado correctamente');
    }
}
