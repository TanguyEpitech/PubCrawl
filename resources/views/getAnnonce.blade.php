<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les annonces') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-message></x-message>


<div class="row">

    @foreach($all as $annonce)

    <div class="card shadow-md m-5 p-5 col-2" style="width: 18rem;">
        <img class="card-img-top" src="/storage/{{$annonce->photographie}}" alt="Card image cap">
        <div class="h3 text-center"> {{$annonce->titre}} </div>
        <div class="card-body">
            <p class="card-text"> {{$annonce->description}}  </p>
        </div>
        <div class="h4 text-center"> {{$annonce->prix}} € </div>

        <div class="h6 text-danger text-center">
            A venir le
            {{ date('jS F Y',strtotime($annonce->prix)) }}</div>
    </div>
    @endforeach

</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
