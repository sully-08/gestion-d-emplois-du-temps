<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gestion des modules</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body class="bg-primary-subtle">
<div class="container bg-light ">@include('layouts.navbar')</div>
<hr>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<div class="container col-5"><img src="\img\salle.jpg" class="img-responsive w-50 h-50 d-block mx-auto " alt="logo"></div>
<h2 class="text-center">LISTE DES SALLES</h2>
<hr>
</div>
<!-- <div class="pull-right mb-2 ">
<a class="btn btn-dark text-light " href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
  <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
</svg>   REVENIR A L'ACCUEIL</a>
</div> -->
<div class="pull-right mb-2 text-end">
<a class="btn btn-success " href="{{ route('salles.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
</svg>   AJOUTER</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered border-dark">
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nom de la salle</th>
        <th class="text-center">Capacité de la salle</th>
        <th class="text-center">Localisation de la salle</th>
        <th class="text-center" width="140px">Action</th>
        </tr>
        @foreach ($salles as $salle)
        <tr>
        <td>{{ $salle->id_salle }}</td>
        <td>{{ $salle->nomsalle }}</td>
        <td>{{ $salle->capacite }}</td>
        <td>{{ $salle->local }}</td>
       
        <td>
        <form action="{{ route('salles.destroy',$salle->id_salle) }}" method="Post">
      
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>  Supprimer</button>
        </form>
        </td>
        </tr>
        @endforeach
</table>
    {!! $salles->links() !!}
</body>
</html>