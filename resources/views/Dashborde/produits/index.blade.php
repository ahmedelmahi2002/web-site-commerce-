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
        #img{
          width: 100%;
          height: 170px;
          border-radius: 5px;
        }
    </style>
</head>
<body>



    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index-2.html"><img src="../../images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="../../index-2.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-bars"></span>
          </button>
          <ul class="navbar-nav">
            <li class="nav-item nav-search d-none d-md-flex">
              <div class="nav-link">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-flex">
              <a class="nav-link" href="{{ route('produits.create') }}">
                <span class="btn btn-primary">+ Create new produite</span>
              </a>
            </li>
            <li class="nav-item dropdown d-none d-lg-flex">
              <div class="nav-link">
                <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item font-weight-medium" href="#">
                    French
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item font-weight-medium" href="#">
                    Espanol
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item font-weight-medium" href="#">
                    Latin
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item font-weight-medium" href="#">
                    Arabic
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="fas fa-bell mx-0"></i>
                <span class="count">16</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <a class="dropdown-item">
                  <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                  </p>
                  <span class="badge badge-pill badge-warning float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-danger">
                      <i class="fas fa-exclamation-circle mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">Application Error</h6>
                    <p class="font-weight-light small-text">
                      Just now
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="fas fa-wrench mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">Settings</h6>
                    <p class="font-weight-light small-text">
                      Private message
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="far fa-envelope mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">New user registration</h6>
                    <p class="font-weight-light small-text">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-envelope mx-0"></i>
                <span class="count">25</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <div class="dropdown-item">
                  <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                  </p>
                  <span class="badge badge-info badge-pill float-right">View all</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                      <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                      <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      New product launch
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                      <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="../../images/faces/face5.jpg" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="fas fa-cog text-primary"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                  <i class="fas fa-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="fas fa-ellipsis-h"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="fas fa-bars"></span>
          </button>
        </div>
      </nav>






    <section class="content " id="zz" style="width: 1200px;">
        <div class="body_scroll">
           
            <div class="container-fluid">
                <div class="row clearfix">
                  
                
             
                
               
          
                    @foreach ($produits as $produit)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="body product_item">
                              <img src="{{ asset('storage/' . $produit->image) }}" alt="Uploaded Image"  id="img">
                                <div class="product_details">
                                    
                                    <ul class=" list-unstyled">
                                        <li class="">codebarre: {{$produit->codebarre}}  </li>
                                        <li class="">designation: {{$produit->designation}} </li>
                                        <li class="">prix_ht: {{$produit->prix_ht}} </li>
                                        <li class="">tva: {{$produit->tva}} </li>
                                        <li class="">description: {{$produit->description}} </li>
                                        <li><strong>Sous Famille:</strong> {{ $produit->sousFamille->libelle }}</li>
                                        <li><strong>Marque:</strong> {{ $produit->marque->marque }}</li>
                                        <li><strong>Unité:</strong> {{ $produit->unite->unite }}</li>
                                    </ul>                                
                                </div>
                                <div class="action">
                                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-info">Show</a>
                        <!-- Delete Button -->
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display: inline;">
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