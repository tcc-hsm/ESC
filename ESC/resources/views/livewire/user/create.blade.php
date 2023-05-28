<x-app-layout>    
    <head>
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
<br><br>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="livewire-user-create">
        <div>
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>

        <div>
            <x-label for="profile" value="{{ __('Profile') }}" />
            <x-input id="profile" class="block mt-1 w-full" type="text" list="profile" name="profile" :value="old('profile')"  required autofocus autocomplete="profile" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div><br><br>

        <x-input class="btn btn-warning" type="submit" />


        <datalist id="profile">
         <option value="">MASTER</option>
         <option value="">Gerente</option>
         <option value="">Recepcionista</option>
         <option value="">Governanta</option>
        </datalist>

        </div>
        </div>
        </form>
</x-app-layout>