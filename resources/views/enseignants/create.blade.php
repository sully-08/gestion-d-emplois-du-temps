<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulaire de creation de enseignant</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body class="bg-dark-subtle">
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
        <h2 class="text-center">AJOUTER UN ENSEIGNANT</h2>
        </div>
        <hr>
        <div class="pull-right">
        <a class="btn btn-dark mb-3" href="{{ route('enseignants.index') }}"> RETOUR</a>
        </div>
        
        </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('enseignants.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>NOM</strong>
        <input type="text" name="nom" class="form-control" placeholder="nom">
        @error('nom')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>PRENOMS</strong>
        <input type="text" name="prenoms" class="form-control" placeholder=" prenoms">
        @error('prenoms')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>E-MAIL :</strong>
            <input type="email" name="email" class="form-control" placeholder="Email">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>SPECIALITE :</strong>
            <input type="text" name="specialite" class="form-control" placeholder="Specialité">
            @error('specialite')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            
            <button type="submit" class="btn btn-info ml-3 col-1  mt-3">AJOUTER</button>
        </div>
        </form>
</body>
</html>