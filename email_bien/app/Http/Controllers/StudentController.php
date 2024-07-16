<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class StudentController extends Controller
{
    private $apiUrl = 'http://localhost:8090/alumnos';

    public function index()
    {
        $response = Http::get($this->apiUrl);
        $students = $response->json();
        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiUrl}/{$id}");
        $student = $response->json();
        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function crear()
    {
        return view('students.crear');
    }

    public function store(Request $request)
    {
        $response = Http::post($this->apiUrl, $request->all());
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/{$id}");
        $student = $response->json();
        return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $response = Http::put("{$this->apiUrl}/{$id}", $request->all());
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $response = Http::delete("{$this->apiUrl}/{$id}");
        return redirect()->route('students.index');
    }
}
