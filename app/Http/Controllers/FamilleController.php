<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $familles = Famille::all();
            return view('Dashborde.familles.index', compact('familles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashborde.familles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        

        // $imageName = time().'.'.$request->image->extension();  
     
        $imagePath = $request->file('image')->store('image','public');

        $famille = new Famille([
            'libelle' => $request->get('libelle'),
            'image' => $imagePath
        ]);

        $famille->save();
        
        return redirect('/familles')->with('success', 'Famille ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $famille = Famille::find($id);
        return view('Dashborde.familles.show', compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        // $famille = Famille::find($id);
        // return view('familles.edit', compact('famille'));
        // $famille = Famille::findOrFail($id);
        // return view('familles.edit',['famille'=>$famille]);
        $famille = Famille::findOrFail($id);
        return view('Dashborde.familles.edit', compact('famille'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {
        $request->validate([
            'libelle' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($request->hasFile('image')) {
            // Store the new image file
            $imagePath = $request->file('image')->store('images', 'public');
            // Update the image path attribute of the famille model
            $famille->image = $imagePath;
        }

        // Update other attributes
        $famille->libelle = $request->input('libelle');

        // Save the updated model
        $famille->save();

        return redirect()->route('familles.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $famille =Famille::findOrFail($id);
        $famille->delete();
        return redirect()->route('familles.index')->with('success','famille has been deleted successfully');
    }
}
