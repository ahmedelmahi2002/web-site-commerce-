<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/etats/show.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Etats Details</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Etat:</strong>
                        {{ $etats->etats }}
                    </div>
       
                    <a href="{{ route('etats.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>
</html>