<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gestion des groupes</title>
<link rel="stylesheet" href="\css\bootstrap.min.css" >

</head>
<body class="bg-primary-subtle">
<div class="container bg-light ">@include('layouts.navbar')</div>
<hr>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-3">
<div class="container col-6"><img src="\img\groupe.webp" class="img-responsive w-50 h-50 d-block mx-auto " alt="logo"></div>
<h2 class="text-center">LISTE DES GROUPES</h2>
</div>
<hr>
<!-- <div class="pull-right mb-2 ">
<a class="btn btn-dark text-light " href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
  <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
</svg>   REVENIR A L'ACCUEIL</a>
</div> -->
<div class="pull-right mb-2 text-end  ">
<a class="btn btn-success" href="{{ route('groupes.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
</svg>  AJOUTER</a>
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
<th class="text-center">NOM DU GROUPE</th>


<th class="text-center" width="230">Action</th>
</tr>
@foreach ($groupes as $groupe)
<tr>
<td>{{ $groupe->id_gr }}</td>
<td>{{ $groupe->libelle }}</td>


<td>
<form action="{{ route('groupes.destroy',$groupe->id_gr) }}" method="Post">
<a class="btn btn-info" href="{{ route('groupes.edit',$groupe->id_gr) }}">Modifier</a> 
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></i>  Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $groupes->links() !!}
</body>
</html>