<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulaire de creation de salle</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body class="bg-dark-subtle">
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
        <h2 class="text-center mt-3">AJOUTER UNE SALLE</h2>
        </div>
        <hr>
        <div class="pull-right">
        <a class="btn btn-dark mb-3" href="{{ route('salles.index') }}"> RETOUR</a>
        </div>
        </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('salles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Nom de la salle</strong>
        <input type="text" name="nomsalle" class="form-control" placeholder="nom de la salle">
        @error('nomsalle')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Capacité de la salle</strong>
        <input type="text" name="capacite" class="form-control" placeholder=" capacite">
        @error('capacite')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Localisation de la salle</strong>
            <input type="text" name="local" class="form-control" placeholder="localisation">
            @error('local')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            
        <button type="submit" class="btn btn-info ml-3 col-1 mt-3">AJOUTER</button>
        </div>
        </form>
</body>
</html>