<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Formulaire de creation de module</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body class="bg-dark-subtle">
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
        <h2 class="text-center mt-3">AJOUTER UN MODULE</h2>
        </div>
        <hr>
        <div class="pull-right">
        <a class="btn btn-dark mb-3" href="{{ route('module.index') }}"> RETOUR</a>
        </div>
        </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('module.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Intitulé</strong>
        <input type="text" name="intitule" class="form-control" placeholder="nom du module">
        @error('intitule')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Coéfficient</strong>
        <input type="text" name="coeff" class="form-control" placeholder=" coefficient">
        @error('coeff')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Volume horaire CT</strong>
            <input type="text" name="vhCT" class="form-control" placeholder="vh CT">
            @error('vhCT')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Volume horaire TD</strong>
            <input type="text" name="vhTD" class="form-control" placeholder="vh TD">
            @error('vhTD')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Volume horaire TP</strong>
            <input type="text" name="vhTP" class="form-control" placeholder="vh TP">
            @error('vhTP')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-info ml-3 col-1 mt-3">AJOUTER</button>
        </div>
        </form>
</body>
</html>