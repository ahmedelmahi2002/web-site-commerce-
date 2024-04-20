<?php

namespace App\Http\Controllers;

use App\Models\marques;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marques::all();
        return view('marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        return view('marques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     
     */
    public function store(Request $request)
{
    $request->validate([
        'marque' => 'required|string|max:255'
    ]);

    // Create a new Marque instance using the create method
    Marques::create($request->post());

    return redirect('/marques')->with('success', 'Marque ajoutée avec succès.');
}


    /**
     * Display the specified resource.
     *

     */
    public function show( $id)
    {
        $marques = Marques::find($id);
        return view('marques.show', compact('marques'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    
     */
    public function edit($id)
    { $marques = Marques::findOrFail($id);
        return view('marques.edit', compact('marques'));
    }

    /**
     * Update the specified resource in storage.
     *
     
     */
    public function update(Request $request, Marques $marque)
    {
        $request->validate([
            'marque' => 'required|string|max:255'
        ]);

        $marque->update($request->all());

        return redirect()->route('marques.index')
            ->with('success', 'Marque updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(string $id)
    {
        $marque =Marques::findOrFail($id);
        $marque->delete();

        return redirect()->route('marques.index')
            ->with('success', 'Marque deleted successfully.');
    }
}
