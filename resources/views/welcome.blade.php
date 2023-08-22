<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GESTION D'EMPLOIS DU TEMPS</title>
        <link rel="stylesheet" href="\css\bootstrap.min.css" >
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head> 
    <body class="antialiased">
        <header class="navbar navbar-expand-md navbar-light bg-light mb-5">
           <div class="col-3"> <a href="/" class="navbar-brand"><img src="\img\logo_esc.jpg" class=" w-25 h-25 img-responsive d-block mx-auto rounded-circle" alt="logo"></a>
            </div>
            @if (Route::has('login'))
            @auth
            <div class="container offset-7"> <ul class="navbar-nav ml-auto">
            
            <li class="nav-item text-end"> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-success"><b>Retourner à l'accueil</b></button></a></li>

            
    </ul>
</div>

            @else
           <div class="container offset-7"> <ul class="navbar-nav ml-auto">
            
                    <li class="nav-item text-end"> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-success"><b>Connexion</b></button></a></li>

                    
            </ul>
        </div>
        @endauth
        @endif
        </header>
    <div class="text-center ">
            
            <h3 class="text-center mb-5">
               <i> Bienvenue sur la plateforme de gestion d'emplois du temps de l'ESC. <br>Nous esperons que vous en profiterez pleinement. <br> Merci  </i>                  
            </h3>
          
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 text-center">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-success">Page d'accueil</button></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-success">Se connecter</button></a> -->

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-dark">Creer un compte</button> </a>
                        @endif -->
                    <!-- @endauth
                </div>
            @endif -->
<hr>
            
        <footer class="bg-primary text-center"> <!-- navbar-fixed-bottom -->
        <div class="container">
  	<div class="row"> <!-- modal-body -->
	  <div class="col-6 col-md-6 col-sm-6 text-light">
	  <h4>A propos</h4>
	    <p>L’École Supérieure de Commerce de Ouagadougou  (ESC-Ouaga) ouvre ses portes afin de faire bénéficier aux étudiants  et étudiantes le savoir et le savoir faire en management et en gestion dans le strict respect des standards reconnus en matière d’enseignement supérieur.</p>
	  </div>
	 
	  <div class="col-6 col-sm-6 col-md-6 text-light">
	  <h4>Contactez-nous</h4>
	    Adresse: 09 BP 1042 Ouagadougou 09 Ouagadougou</br> Kadiogo / Burkina Faso <br>
	    <p>Téléphone : 	+226 50 37 04 06 </br>
			Tél. mobile : 	+226 76 61 98 85 ;+226 64 03 55 55 <br>
	    <span>Email : esc.ouaga@gmail.com</span> </p>
	  </div>
	</div>
    </div>
</footer>
    </body>
</html>
