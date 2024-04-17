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
    <!-- resources/views/familles/index.blade.php -->


    <div class="container">
        <h1>Familles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($familles as $famille)
                <tr>
                    <td>{{ $famille->id }}</td>
                    <td>{{ $famille->libelle }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $famille->image) }}" alt="Uploaded Image">
                    </td>
                    
                    <td>{{ $famille->created_at }}</td>
                    <td>{{ $famille->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>
</html>
@endsection