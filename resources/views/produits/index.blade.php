@extends('Dashborde.layouts.layout')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        #zz{
           width: 70vw;
           height: 70vh;
           position: absolute;
           left: 300px;
           bottom: 100px;
        }
    </style>
</head>
<body>
    <section class="content" id="zz">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Product</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item">eCommerce</li>
                            <li class="breadcrumb-item active">Product</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">                
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                  
                
             
                
               
          
                    @foreach ($produits as $produit)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="body product_item">
                                <img src="{{ asset('images/' . $produit->image) }}" alt="{{ $produit->designation }}" style="width: 100px;">
                                <div class="product_details">
                                    <a href="ec-product-detail.html">Blend Classic Coat</a>
                                    <ul class="product_price list-unstyled">
                                        <li class="old_price">$99.00</li>
                                        <li class="new_price">$79.00</li>
                                    </ul>                                
                                </div>
                                <div class="action">
                                    <a href="{{ route('unites.edit', $unite->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('unites.show', $unite->id) }}" class="btn btn-info">Show</a>
                        <!-- Delete Button -->
                        <form action="{{ route('unites.destroy', $unite->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this famille?')">Delete</button>
                        </form>
                                </div>
                            </div>
                        </div>                
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection