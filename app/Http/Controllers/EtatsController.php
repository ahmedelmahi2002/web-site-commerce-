<?php

namespace App\Http\Controllers;

use App\Models\etats;
use Illuminate\Http\Request;

class EtatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etats::all();
        return view('etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etats = new Etats;
        $etats->etats = $request->etats;
        $etats->save();
        return redirect()->route('etats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etats = Etats::find($id);
        return view('etats.show', compact('etats'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    { $etats = Etats::findOrFail($id);
        return view('etats.edit', compact('etats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etats $etat)
    {
        $request->validate([
            'etats' => 'required|string',
        ]);

        $etat->update($request->all());

        return redirect()->route('etats.index')
            ->with('success', 'Etat updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etats =Etats::findOrFail($id);
        $etats->delete();

        return redirect()->route('etats.index')
            ->with('success', 'etats deleted successfully.');
    }
}
