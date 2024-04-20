<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Sous Famille</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Sous Famille Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="libelle">Libelle:</label>
                            <p>{{ $sousFamille->libelle }}</p>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <img src="{{ asset('storage/' . $sousFamille->image) }}" alt="Sous Famille Image" class="img-fluid">
                        </div>
                        <div class="form-group">
                            <label for="famille">Famille:</label>
                            <p> @if($sousFamille->famille_id)
                                {{ $sousFamille->famille_id }}
                            @else
                                No Family
                            @endif</p>
                        </div>
                       
                        <a href="{{ route('sous_familles.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
