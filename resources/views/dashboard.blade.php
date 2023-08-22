 <x-app-layout>
    
    <x-slot name="header">
        <h1 class="text-white">
            {{ __('Page d\'accueil') }}
        </h1>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <span>Bienvenue </span><i>{{ Auth::user()->name }}</i> <span>, vous êtes connectés sur la plateforme avec l'email  </span> <b>{{ Auth::user()->email }} </b>
         
                </div>
                <div class="text-end"><span>Nous sommes le {{ date('d/m/Y ') }}  et il est : {{date('H:i:s')}}</span></div>
                                  
               <!-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{__("Toujours à la poursuite du perfectionnement")}}
                </div> -->
            </div>
        </div>
    </div>

</x-app-layout>

