<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Nueva reserva') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     @if (session('error'))
                        <p>{{session('error')}}</p>
                    @endif
                    <form method="post" action="{{route('flights.create')}}">
                        @csrf <select name="flights">
                            <option value="" selected disabled>Selecciona un vuelo</option>
                            @foreach ($flights as $flight)    
                            <option value="{{$flight->id}}">{{$flight->originAirport->name}} - {{$flight->destinationAirport->name}}</option>
                            @endforeach
                        </select>
                        <label>Seats</label>
                        <input type="number" name="seats">
                        <label>Notes</label>
                        <input type="text" name="notes">
                        <button type="submit">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
