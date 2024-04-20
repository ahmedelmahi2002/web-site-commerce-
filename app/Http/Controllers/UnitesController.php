<?php

namespace App\Http\Controllers;

use App\Models\unites;
use Illuminate\Http\Request;

class UnitesController extends Controller
{
  
    public function index()
    {
        $unites = Unites::all();
        return view('unites.index', compact('unites'));
    }

  
    public function create()
    {
        return view('unites.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'unite' => 'required|string|max:255'
        ]);

        Unites::create($request->all());

        return redirect()->route('unites.index')
            ->with('success', 'Unite created successfully.');
    }

   
    
    public function show(Unites $unite)
    {
        return view('unites.show', compact('unite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    
     */
    public function edit( $id)
    {
        $unites = Unites::findOrFail($id);
        return view('unites.edit', compact('unites'));
    }

 
    public function update(Request $request, Unites $unite)
    {
        $request->validate([
            'unite' => 'required|string|max:255'
        ]);

        $unite->update($request->all());

        return redirect()->route('unites.index')
            ->with('success', 'Unite updated successfully.');
    }


    public function destroy(Unites $unite)
    {
        $unite->delete();

        return redirect()->route('unites.index')
            ->with('success', 'Unite deleted successfully.');
    }
}
