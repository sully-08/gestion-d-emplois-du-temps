<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modification</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body class="bg-success-subtle">
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2 class="text-primary mb-3">Modifier</h2>
</div>
<hr>
<div class="pull-right mb-1">
<a class="btn btn-dark" href="{{ route('enseignants.index') }}" enctype="multipart/form-data"> Retour</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('enseignants.update',$enseignant->id_ens) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom </strong>
<input type="text" name="nom" value="{{ $enseignant->nom }}" class="form-control" placeholder="nom">
@error('nom')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenoms</strong>
<input type="text" name="prenoms" class="form-control" placeholder="Prenoms" value="{{ $enseignant->prenoms }}">
@error('prenoms')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>E-mail </strong>
<input type="email" name="email" value="{{ $enseignant->email }}" class="form-control" placeholder="Email">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Specialité </strong>
<input type="text" name="specialite" value="{{ $enseignant->specialite }}" class="form-control" placeholder="Volume horaire TD">
@error('specialite')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

</div>
</div>
<button type="submit" class="btn btn-primary ml-3 col-2 mt-3">Enregistrer</button>
</div>
</form>
</div>
</body>
</html>