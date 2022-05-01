<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une Annonce') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="/ajouter" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                        <div>
<x-label> Titre </x-label>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label> Description </x-label>

                            <textarea id="description" style="width: 100%"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" minlength="15" rows="10" cols="50" name="description" required> </textarea>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="picture" :value="__('Photographie')" />

                            <x-input id="photographie" style="background: white;" class="block mt-1 w-full"
                                     type="file"
                                     name="photographie"/>
                        </div>

                        <div class="mt-4">
                            <x-label for="prix" :value="__('Prix')" />

                            <x-input id="Prix" class="block mt-1 w-full"
                                     type="number"
                                     name="prix"/>
                        </div>


                        <x-button class=" py-3 my-3 ml-4">
                            {{ __('Ajouter') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>





</x-app-layout>
