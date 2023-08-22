<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-10 sm:px-10 lg:px-10">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="text-center">
                    <a href="{{ route('dashboard') }}">
                            
                        <img src="\img\logo_esc.jpg" class="img-responsive w-100 h-100 d-block mx-auto rounded-circle" alt="logo">
                                <!-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                    -->
                        </a>
                </div>

                <!-- Navigation Links -->
                <div class="container mt-3 ">
              
                                 <ul class="nav nav-tabs">
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard') }}"><button> <b>ACCUEIL</b></button></a></li>
                                            <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Accueil') }}
                                            -->
                                        <!-- </x-nav-link>-->
                                        @can('access-admin')
                                            <li class="nav-item"><a class="nav-link" href="{{ route('seances.index') }}"><button><b>EMPLOIS DU TEMPS</b></button></a></li>
                                            @endcan
                                       
                                            @can('deny-admin')
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nivo.index') }}"><button><b>EMPLOIS DU TEMPS</b></button></a></li>
                                            @endcan
                                            <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Emploi du temps') }}
                                                -->
                                        <!-- </x-nav-link>-->


<!-- Ici , on determine l'affichage des pages en fonction des utilisateurs connectés
                                                    Par exemple, un enseignant ou un etudiant n'ont pas les memes vues par rapport à l'administrateur -->
                                        @can('access-admin')
                                        <li class="nav-item"><a class="nav-link" href="{{ route('module.index') }}"><button><b>MODULES</b></button></a></li>   
                                        <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Modules') }}
                                            -->
                                            <!--</x-nav-link>-->
                                        <li class="nav-item"> <a class="nav-link" href="{{ route('salles.index') }}"><button><b>SALLES</b></button></a></li>
                                            <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Salles') }}
                                            -->
                                            <!--</x-nav-link>-->
                                        <li class="nav-item"> <a class="nav-link" href="{{ route('filieres.index') }}"><button><b>FILIERES</b></button></a></li> 
                                        <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Filieres') }}
                                            -->
                                            <!--</x-nav-link>-->
                                        <li class="nav-item"> <a class="nav-link" href="{{ route('enseignants.index') }}"><button class="nav-item"><b>ENSEIGNANTS</b></button></a></li>

                                        <li class="nav-item"> <a class="nav-link" href="{{ route('groupes.index') }}"><button class="nav-item"><b>GROUPES</b></button></a></li>
                                
                                        @endcan
                                            <!--<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Enseignants') }}
                                            </x-nav-link>
                                            -->
                        </ul>
                        
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Se deconnecter') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se deconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
