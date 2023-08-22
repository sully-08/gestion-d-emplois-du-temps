<div class="bg-info-subtle">
<x-guest-layout>
<div class="container"><h1 class="text-center text-warning"><b>CREER UN COMPTE SUR LA PLATEFORME D'EMPLOIS DU TEMPS</b></h1></div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <p class="text-left mt-1"><b>Je suis :</b></p>
        <div class="container ">
        <label for="etudiant">Etudiant
        <input type="radio" value="1"  id="etudiant" name="role_id">
        <span class="checkmark"></span>
        </label>
        <label for="enseignant">Enseignant
        <input type="radio" value="2"  id="enseignant" name="role_id">
        <span class="checkmark"></span>
        </label>
        </div>
        <div class="flex items-center justify-end mt-3 mb-1">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('J\'ai déjà un compte, connexion') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('S\'enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
</div>