<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-message></x-message>


                    <h4>Mes Annonces</h4>
@if (!(empty($data)))
                        <h5 style="color:black">Voici vos annonces</h5>


                    <div style="display:flex;"    >

                    @foreach($data as $data)


                            <div style="max-height: 300px; max-width: 300px"  class="card shadow-md m-5 p-5 col" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/{{$data->photographie}}" alt="Card image cap">
                                <br>
                                <div class="h5 text-center"> {{$data->titre}} </div>
                                <div class="card-body">
                                <div class="h6 text-center">
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; margin: auto;" class="h6 text-center">
                                        <button class="alert-success btn m-2"> Modifier</button>
                                        <button class="alert-danger btn  m-2"> Supprimer</button>

                                    </div>
                                </div>



                                </div>

                            </div>

                        @endforeach
                    </div>
@else
<br>
                        <h5 style="color:black">Aucune annonce pour le moment</h5>

                    @endif


                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
