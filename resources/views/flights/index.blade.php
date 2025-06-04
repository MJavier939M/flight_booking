<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de vuelos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <p>{{session('success')}}</p>
                    @endif
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Aerolínea</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Precio</th>
                                <th>Hora Llegada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flights as $flight)
                            <tr>
                                <td>{{$flight->id}}</td>
                                <td>{{$flight->airline->name}}</td>
                                <td>{{$flight->originAirport->name}}</td>
                                <td>{{$flight->destinationAirport->name}}</td>
                                <td>{{$flight->price}}</td>
                                <td>{{$flight->arrival_time}}</td>
                                <td><form method="post" action="{{route('flights.destroy',$flight->id)}}">@method('DELETE') @csrf<button type="submit">Cancelar</button></form></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>