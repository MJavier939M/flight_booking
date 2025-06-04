<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightController extends Controller
{
    public function index(Request $request) {
        
        $id_usuario = Auth::user()->id;

        $flights = Flight::whereHas('reservations', function ($query) use ($id_usuario) {
            $query->where('user_id', $id_usuario);
        })->get(); 

        return view("flights.index",compact("flights"));
    }

    public function destroy($id_vuelo) {
        
        // return Flight::with('reservations')->find($id_vuelo); 

        $id_usuario = Auth::user()->id;
        
        $reservas = Reservation::where('flight_id',$id_vuelo)->where('user_id',$id_usuario)->get();
        $reservas->each->delete();

        return redirect()->route('flights.index')->with("success","Vuelo borrado con éxito");
    
    
    }

    public function reservas() {

        $flights = Flight::all();

        return view('flights.reserva',compact("flights"));
    }

    public function create(Request $request) {
        
        $id_usuario = Auth::user()->id;

        $id_vuelo = $request['flights']; 

        $reservas = Reservation::where('flight_id',$id_vuelo)->where('user_id',$id_usuario)->first();
        // return $reservas;
        if ($reservas) {
            return redirect()->route('flights.reservas')->with("error","Ya existe una reserva");
        }

        $validate = $request->validate([
            "flights" => "required|integer",
            "seats" => "required|integer|min:1",
            "notes" => "nullable|string|max:100",
        ]);

        if (!$validate) {
           return redirect()->route('flights.reservas')->with("error","No valida");
        }

            Reservation::create([
                "user_id" => $id_usuario,
                "flight_id" => $validate['flights'],
                "passengers" => $validate['seats'],
                "notes" => $validate['notes'],
            ]);

            return redirect()->route('flights.index')->with('success',"Vuelo reservado");
    }
}
