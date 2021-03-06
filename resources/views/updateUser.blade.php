<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon compte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

             <x-message></x-message>







                    <x-auth-validation-errors class="mb-4" :errors="$errors" />



                    <form method="POST" action="/updateUser">
                    @csrf
                    <!-- Name -->
                        <div>
                            <label>Nom du compte : {{$users->name}}</label>

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <label>Email : {{$users->email}}</label>

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="new-password" />
                        </div>

                        <x-button class=" py-3 my-3 ml-4">
                            {{ __('Modifier') }}
                        </x-button>
                    </form>
            </div>
        </div>
    </div>





</x-app-layout>
