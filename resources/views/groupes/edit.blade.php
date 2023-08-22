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
<h2>Modifier</h2>
</div>
<hr>
<div class="pull-right">
<a class="btn btn-dark" href="{{ route('groupes.index') }}" enctype="multipart/form-data"> Retour</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('groupes.update',$groupe->id_gr) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom du groupe</strong>
<input type="text" name="libelle" value="{{ $groupe->libelle }}" class="form-control" placeholder="nom de la groupe  ">
@error('libelle')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>





<button type="submit" class="btn btn-primary ml-3 col-1 mt-3">Enregistrer</button>
</div>
</form>
</div>
</body>
</html>