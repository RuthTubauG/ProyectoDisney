<?php

namespace App\Http\Controllers;

use App\Models\Juguetes;
use Illuminate\Http\Request;

class JuguetesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Llamamos a la carpeta juguetes y al juguetes.blade
        return view('juguetes.juguetes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Juguetes $juguetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juguetes $juguetes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juguetes $juguetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juguetes $juguetes)
    {
        //
    }
}
