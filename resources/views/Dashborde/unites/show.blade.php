@extends('Dashborde.layouts.layout')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Unit</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Unite Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="unite">Unite:</label>
                            <p>{{ $unite->unite }}</p>
                        </div>
                      
                        <a href="{{ route('unites.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection