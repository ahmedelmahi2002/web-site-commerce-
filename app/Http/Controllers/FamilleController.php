<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $familles = Famille::all();
            return view('familles.index', compact('familles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('familles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        

        $imageName = time().'.'.$request->image->extension();  
     
        $filePath = $request->file('image')->store('imageFamilie','public');

        $famille = new Famille([
            'libelle' => $request->get('libelle'),
            'image' => $filePath
        ]);

        $famille->save();
        
        return redirect('/familles')->with('success', 'Famille ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $id)
    {
        $famille = Famille::find($id);
        return view('familles.show', compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $id)
    {
        $famille = Famille::find($id);
        return view('familles.edit', compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $id)
    {
        $request->validate([
            'libelle' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $famille = Famille::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $famille->image = $imageName;
        }

        $famille->libelle = $request->get('libelle');
        $famille->save();

        return redirect('/familles')->with('success', 'Famille mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $id)
    {
        $famille = Famille::find($id);
        $famille->delete();

        return redirect('/familles')->with('success', 'Famille supprimée avec succès.');
    }
}
