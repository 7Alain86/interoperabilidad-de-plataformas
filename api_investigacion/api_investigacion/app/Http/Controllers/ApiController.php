<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function dia()
    {
        $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=' . env('API_KEY'));
        $data = $response->json();

        return view('dia', ['data' => $data]);
    }

    public function aleatorio()
    {
        $timestampInicio = strtotime("1995-06-16");
        $timestampFinal = strtotime(date("Y-m-d"));

        $randtimestamp = mt_rand($timestampInicio, $timestampFinal);
        $date = date("Y-m-d", $randtimestamp);

        $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=' . env('API_KEY') . '&date=' . $date);
        $data = $response->json();

        return view('random', ['data' => $data]);
    }


    public function sandbox()
    {
        // función pensada únicamente para debug, 
        // si se quiere hacer un cambio en otra función primero probar aquí 
        // y luego implementar

        // Actualmente se está trabajando con:
        // **************
        //      Marte
        // **************

        $timestampInicio = strtotime("2015-06-16");
        $timestampFinal = strtotime(date("Y-m-d"));

        $randtimestamp = mt_rand($timestampInicio, $timestampFinal);
        $date = date("Y-m-d", $randtimestamp);


        $response = Http::get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date='  . '&date=' . $date . '&api_key=' . env('API_KEY'));
        $data = $response;
        //$data = $response->json();

        return view('sandbox', ['data' => $data]);
    }

    public function fecha(Request $request)
    {
        $request->validate(['fecha' => 'required|date']);
        $date = $request->input('fecha');

        $fechaInicio = '1995-06-16';
        $fechaFin = date('Y-m-d');

        if ($date >= $fechaInicio && $date <= $fechaFin) {

            $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=' . env('API_KEY') . '&date=' . $date);
            $data = $response->json();

            return view('fecha', ['data' => $data]);

        } else {
            $ErrorFechaFueraDeRango = "La fecha que ingresó está fuera del rango válido, por favor ingrese una fecha dentro del rango válido.";
            return view('enviar', ['error' => $ErrorFechaFueraDeRango]);
        }
    }
}
