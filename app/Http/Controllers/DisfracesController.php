<?php

namespace App\Http\Controllers;

use App\Models\Disfraces;
use Illuminate\Http\Request;

class DisfracesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Llamamos a la carpeta disfraces y al disfraces.blade
        return view('disfraces.disfraces');
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
    public function show(Disfraces $disfraces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disfraces $disfraces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disfraces $disfraces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disfraces $disfraces)
    {
        //
    }
}
