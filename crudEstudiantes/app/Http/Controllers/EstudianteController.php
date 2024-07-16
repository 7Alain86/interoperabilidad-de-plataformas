<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'edad' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:estudiantes,email',
            'fechanacimiento' => 'required|date',
        ]);

        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function show($codigo)
    {
        $estudiante = Estudiante::where('codigo', $codigo)->firstOrFail();
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit($codigo)
    {
        $estudiante = Estudiante::where('codigo', $codigo)->firstOrFail();
        return view('estudiantes.edit', compact('estudiante'));
    }


    public function update(Request $request, $codigo)
    {
        $estudiante = Estudiante::where('codigo', $codigo)->firstOrFail();
        
        $request->validate([
            'codigo' => 'required',
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'edad' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:estudiantes,email,' . $codigo . ',codigo',
            'fechanacimiento' => 'required|date',
        ]);

        $estudiante->update($request->all());
        
        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante actualizado correctamente.');
    }



    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
