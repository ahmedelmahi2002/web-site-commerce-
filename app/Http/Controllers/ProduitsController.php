<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
 
    
 
        public function index()
        {
            $produits = Produits::all();
            return view('produits.index', compact('produits'));
        }
    
     
        public function create()
        {
            return view('produits.create');
        }
    
    
        public function store(Request $request)
        {
            $request->validate([
                'codebarre' => 'required|numeric|unique:produits',
                'designation' => 'required|string',
                'prix_ht' => 'required|numeric',
                'tva' => 'required|numeric',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'sous_famille_id' => 'required|exists:sous_familles,id',
                'marque_id' => 'required|exists:marques,id',
                'unite_id' => 'required|exists:unites,id',
            ]);
    
            $imageName = time().'.'.$request->image->extension();  
         
            $request->image->move(public_path('images'), $imageName);
    
            $produit = Produits::create([
                'codebarre' => $request->codebarre,
                'designation' => $request->designation,
                'prix_ht' => $request->prix_ht,
                'tva' => $request->tva,
                'description' => $request->description,
                'image' => $imageName,
                'sous_famille_id' => $request->sous_famille_id,
                'marque_id' => $request->marque_id,
                'unite_id' => $request->unite_id,
            ]);
    
            return redirect()->route('produits.index')
                             ->with('success', 'Produit created successfully.');
        }
    
       
        public function show(Produits $produit)
        {
            return view('produits.show', compact('produit'));
        }
    
        public function edit(Produits $produit)
        {
            return view('produits.edit', compact('produit'));
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
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('images'), $imageName);
                $produit->image = $imageName;
            }
    
            $produit->designation = $request->designation;
            $produit->prix_ht = $request->prix_ht;
            $produit->tva = $request->tva;
            $produit->description = $request->description;
            $produit->sous_famille_id = $request->sous_famille_id;
            $produit->marque_id = $request->marque_id;
            $produit->unite_id = $request->unite_id;
            $produit->save();
    
            return redirect()->route('produits.index')
                             ->with('success', 'Produit updated successfully.');
        }
    
       
        public function destroy(Produits $produit)
        {
            $produit->delete();
    
            return redirect()->route('produits.index')
                             ->with('success', 'Produit deleted successfully.');
        }
}
