@extends('Dashborde.layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Family</title>
</head>
<body>
    <!-- resources/views/familles/show.blade.php -->

    <div class="container">
        <h1>Family Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $famille->libelle }}</h5>
                <p class="card-text">
                    <strong>ID:</strong> {{ $famille->id }}<br>
                    <strong>Image:</strong><br>
                    <img src="{{ asset('storage/' . $famille->image) }}" alt="Family Image"><br>
                  
                </p>
                <a href="{{ route('familles.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
