<?php

namespace App\Http\Controllers;

use App\Models\sous_famille;
use App\Models\Famille;
use Illuminate\Http\Request;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sousFamilles = sous_famille::all();
        $familles = Famille::all();
        return view('Dashborde.sous_familles.index', compact('sousFamilles','familles'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $familles = Famille::all();
        return view('Dashborde.sous_familles.create',compact('familles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'famille_id' => 'required|exists:familles,id'
        ]);
    
        $filePath = null; // Default value if no image is uploaded
    
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('imageFamilie', 'public');
        }
    
        $sous_famille = new sous_famille([
            'libelle' => $request->get('libelle'),
            'image' => $filePath,
            'famille_id' => $request->get('famille_id')
        ]);
    
        $sous_famille->save();
    
        return redirect('/sous_familles')->with('success', 'Famille ajoutée avec succès.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(sous_famille $sousFamille)
    {
        return view('Dashborde.sous_familles.show', compact('sousFamille'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $familles = Famille::all();
        $sous_famille = sous_famille::findOrFail($id);
        return view('Dashborde.sous_familles.edit', compact('sous_famille','familles'));
    }

    /**
     * Update the specified resource in storage.
     */
  

     public function update(Request $request, sous_famille $sous_famille)
     {
         $request->validate([
             'libelle' => 'required',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'famille_id' => 'required|exists:familles,id'
         ]);
     
         if ($request->hasFile('image')) {
            // Store the new image file
            $imagePath = $request->file('image')->store('images', 'public');
            // Update the image path attribute of the famille model
            $sous_famille->image = $imagePath;
        }

        // Update other attributes
        $sous_famille->libelle = $request->input('libelle');
        $sous_famille->famille_id = $request->input('famille_id');
        // Save the updated model
        $sous_famille->save();

        return redirect()->route('sous_familles.index');
     }
     
     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sousFamille =sous_famille::findOrFail($id);
        $sousFamille->delete();
        return redirect()->route('sous_familles.index')->with('success','  sous famille has been deleted successfully');
    }
}
