<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules\In;
use Ramsey\Uuid\Type\Integer;

class EstudiantesController extends Controller
{
    public function getAll()
    {
        $request = Http::get('http://localhost:8090/alumnos');
        $data = $request->json();
        return view('estudiantes', ['data' => $data]);
    }

    public function create(Request $request)
    {
        
        return redirect()->route('estudiantes');
    }
    public function getById(int $id)
    {
        $request = Http::get('http://localhost:8090/alumnos' . $id);
        $data = $request->json();
    }
}
