@extends('layouts.layout')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create Famille</h1>
        <form action="{{ route('familles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="libelle">Libelle</label>
                <input type="text" name="libelle" id="libelle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image"  class="form-control-file" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Famille</button>
        </form>
    </div>
</body>
</html>
@endsection