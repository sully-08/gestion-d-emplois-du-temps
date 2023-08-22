<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de navigation</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css" >
</head>
<body>
    <!-- Navigation Links -->
<navbar>
<div class="row">
        <div class="col-1">
        <a href="/"><img src="\img\logo_esc.jpg" class="img-responsive w-100 d-block mx-auto rounded-circle" alt="logo"></a>
</div>
        
            <div class="col-11">  
                        <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard') }}"> <b>ACCUEIL</b></a></li>
                                <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Accueil') }}
                                -->
                            <!-- </x-nav-link>-->
                            @can('access-admin')
                                <li class="nav-item"><a class="nav-link" href="{{ route('seances.index') }}"><b>EMPLOIS DU TEMPS</b></a></li>
                                @endcan
                            
                                @can('deny-admin')
                                <li class="nav-item"><a class="nav-link" href="{{ route('edt.index') }}"><b>EMPLOIS DU TEMPS</b></a></li>
                                @endcan
                                <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Emploi du temps') }}
                                    -->
                            <!-- </x-nav-link>-->


        <!-- Ici , on determine l'affichage des pages en fonction des utilisateurs connectés
                                        Par exemple, un enseignant ou un etudiant n'ont pas les memes vues par rapport à l'administrateur -->
                            @can('access-admin')
                            <li class="nav-item"><a class="nav-link" href="{{ route('module.index') }}"><b>MODULES</b></a></li>   
                            <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Modules') }}
                                -->
                                <!--</x-nav-link>-->
                            <li class="nav-item"> <a class="nav-link" href="{{ route('salles.index') }}"><b>SALLES</b></a></li>
                                <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Salles') }}
                                -->
                                <!--</x-nav-link>-->
                            <li class="nav-item"> <a class="nav-link" href="{{ route('filieres.index') }}"><b>FILIERES</b></a></li> 
                            <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Filieres') }}
                                -->
                                <!--</x-nav-link>-->
                            <li class="nav-item"> <a class="nav-link" href="{{ route('enseignants.index') }}"><b>ENSEIGNANTS</b></a></li>

                            <li class="nav-item"> <a class="nav-link" href="{{ route('groupes.index') }}"><b>GROUPES</b></a></li>
                    
                            @endcan
                            </ul>
                    </div>
                    </div>
     </navbar>
                         <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                             {{ __('Enseignants') }}
                         </x-nav-link>
                         -->
   
     
</div>
</div>
</body>
</html>