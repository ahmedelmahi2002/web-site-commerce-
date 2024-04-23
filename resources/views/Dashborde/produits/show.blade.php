@extends('Dashborde.layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
    
    <style>
        /* Your custom CSS styles here */
        .card {
          max-width: 550px;
          width: 100%;
          background: white;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
          padding: 20px;
          background-color: #6a64f1;
          border-top-left-radius: 8px;
          border-top-right-radius: 8px;
          color: white;
          font-size: 1.5rem;
        }
        .card-body {
          padding: 20px;
        }
        .product-details {
          font-size: 16px;
        }
        .product-details p {
          margin-bottom: 10px;
        }
        .product-details img {
          max-width: 100%;
          height: auto;
          border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Product Details</h2>
        </div>
        <div class="card-body">
            <div class="product-details">
                <p><strong>ID:</strong> {{ $produit->id }}</p>
                <p><strong>Code Barre:</strong> {{ $produit->codebarre }}</p>
                <p><strong>Designation:</strong> {{ $produit->designation }}</p>
                <p><strong>Prix (HT):</strong> ${{ $produit->prix_ht }}</p>
                <p><strong>TVA:</strong> {{ $produit->tva }}%</p>
                <p><strong>Description:</strong> {{ $produit->description }}</p>
                <p><strong>Image:</strong>  <img src="{{ asset('storage/' . $produit->image) }}" alt="Uploaded Image"  id="img"</p>
                <p><strong>Sous Famille:</strong> {{ $produit->sousFamille->libelle }}</p>
                <p><strong>Marque:</strong> {{ $produit->marque->marque }}</p>
                <p><strong>Unité:</strong> {{ $produit->unite->unite }}</p>

            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
