<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paciente = Paciente::orderBy('created_at', 'DESC')->get();

        return view('pacientes.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());

        return redirect()->route('admin/pacientes')->with('success', 'Paciente añadido con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = Paciente::findOrFail($id);

        $paciente->update($request->all());

        return redirect()->route('admin/pacientes')->with('success', 'Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paciente = Paciente::findOrFail($id);

        $paciente->delete();

        return redirect()->route('admin/pacientes')->with('success', 'Paciente eliminado con éxito');
    }
}
