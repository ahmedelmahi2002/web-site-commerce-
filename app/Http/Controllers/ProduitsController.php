<?php

namespace App\Http\Controllers;

use App\Models\produits;
use App\Models\marques;
use App\Models\unites;
use App\Models\sous_famille;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
 
    
 
        public function index()
        {
            $produits = Produits::all();
            return view('Dashborde.produits.index', compact('produits'));
        }
    
     
        public function create()
        {
            $marques = Marques::all();
            $unites = Unites::all();
            $sousFamilles = sous_famille::all();
            return view('Dashborde.produits.create',compact('sousFamilles','marques','unites'));
        }
    
    
        public function store(Request $request)
        {
            $request->validate([
                'codebarre' => 'required',
                'designation' => 'required',
                'prix_ht' => 'required',
                'tva' => 'required',
                'description' => 'required',
                'image' => 'required|image',
                'sous_famille_id' => 'required',
                'marque_id' => 'required',
                'unite_id' => 'required',
            ]);
    

         
             $imagePath = $request->file('image')->store('image','public');
    
            $produit = new Produits([
                'codebarre' => $request->get('codebarre'),
                'designation' => $request->get('designation'),
                'prix_ht' => $request->get('prix_ht'),
                'tva' => $request->get('tva'),
                'description' => $request->get('description'),
                'image' => $imagePath,
                'sous_famille_id' => $request->get('sous_famille_id'),
                'marque_id' => $request->get('marque_id'),
                'unite_id' => $request->get('unite_id'),
            ]);
            $produit ->save();
           return redirect('/produits')->with('success', 'produits ajoutée avec succès.');
        }
    
       
        public function show(Produits $produit)
        {
            return view('Dashborde.produits.show', compact('produit'));
        }
    
        public function edit( $id)
        {
            $marques = Marques::all();
            $unites = Unites::all();
            $sousFamilles = sous_famille::all();
            $produit = Produits::findOrFail($id);
            return view('Dashborde.produits.edit', compact('produit','sousFamilles','marques','unites'));
        }
    
     
        public function update(Request $request, Produits $produit)
        {
            $request->validate([
                'designation' => 'required|string',
                'prix_ht' => 'required|numeric',
                'tva' => 'required|numeric',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'sous_famille_id' => 'required|exists:sous_familles,id',
                'marque_id' => 'required|exists:marques,id',
                'unite_id' => 'required|exists:unites,id',
            ]);
    
            if ($request->hasFile('image')) {
                // Store the new image file
                $imagePath = $request->file('image')->store('images', 'public');
                // Update the image path attribute of the famille model
                $produit->image = $imagePath;
            }
    
            // Update other attributes
            $produit->designation = $request->input('designation');
            $produit->prix_ht = $request->input('prix_ht');
            $produit->tva = $request->input('tva');
            $produit->description = $request->input('description');
            $produit->sous_famille_id = $request->input('sous_famille_id');
            $produit->marque_id = $request->input('marque_id');
            $produit->unite_id = $request->input('unite_id');
    
            // Save the updated model
            $produit->save();
    
            return redirect()->route('produits.index');
        }
    
       
        public function destroy(string $id)
        {
            $produit =Produits::findOrFail($id);
            $produit->delete();
    
            return redirect()->route('produits.index')
                ->with('success', 'produits deleted successfully.');
        }
}
