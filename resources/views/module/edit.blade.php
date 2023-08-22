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
            <h2>Modifier le module</h2>
            </div>
            <hr>
            <div class="pull-right">
                    <a class="btn btn-dark mb-3" href="{{ route('module.index') }}" enctype="multipart/form-data"> Retour</a>
            </div>
        </div>
    </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
<form action="{{ route('module.update',$module->id_module) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Coéfficient:</strong>
<input type="text" name="intitule" value="{{ $module->intitule }}" class="form-control" placeholder="Coefficient">
@error('intitule')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Coéfficient:</strong>
<input type="text" name="coeff" class="form-control" placeholder="Coefficient" value="{{ $module->coeff }}">
@error('coeff')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Volume horaire CT:</strong>
<input type="text" name="vhCT" value="{{ $module->vhCT }}" class="form-control" placeholder="Volume horaire CT">
@error('vhCT')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Volume horaire TD:</strong>
<input type="text" name="vhTD" value="{{ $module->vhTD }}" class="form-control" placeholder="Volume horaire TD">
@error('vhTD')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Volume horaire TP:</strong>
<input type="text" name="vhTP" value="{{ $module->vhTP }}" class="form-control" placeholder="Volume horaire TP">
@error('vhTP')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
    <button type="submit" class="btn btn-primary ml-3 col-2 mt-3">Enregistrer</button>
</div>
</form>
</div>
</body>
</html>