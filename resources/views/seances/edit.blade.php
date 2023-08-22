<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>formulaire seance</title>
<link rel="stylesheet" href="\css\bootstrap.min.css">
</head>
<body>
        <div class="row mt-5 ">
            <div class="col-5 offset-4 ">
        <form class="form-control" action="{{route('seances.update', $emploi->id_emploi)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="bg-primary">
            <h1 class="text-center text-light mb-5">Ajouter une seance</h1>
            <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="jour">Jour </label>
                <input type="text" name="jour" value="{{$emploi->jour}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="jour">Heure de debut </label>
                <input type="text" name="hdebut" value="{{$emploi->hdebut}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="jour">Heure de fin </label>
                <input type="text" name="hfin" value="{{$emploi->hfin}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="salle">Type de seance </label>
                <input type="text" name="type" value="{{$emploi->type}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="salle">Salle </label>
                <input type="text" name="salle" value="{{$emploi->salle}}" class="form-control">
                </div>
            </div>

           <div class="col-xs-4 col-sm-4 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="enseignant">Enseignant </label>
                <input type="text" name="enseignant" value="{{$emploi->enseignant}}" class="form-control">
                </div>
            </div>

           <div class="col-xs-12 col-sm-8 col-md-4 offset-1">
                <div class="form-group text-light">
                <label for="module">Module </label>
                <input type="text" name="module" value="{{$emploi->module}}" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3 offset-1 mb-5">Ajouter</button>
            </div>
        </form>
        </div>
        </div>
</body>
</html>