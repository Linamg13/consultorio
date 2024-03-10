@extends('layouts.app')

@section('title', 'Show paciente')

@section('contents')
    <h1 class="font-bold text-2xl ml-3">Detalles del paciente</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                <div class="mt-2">
                    {{ $paciente->nombre }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                <div class="mt-2">
                    {{ $paciente->apellido }}
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Cédula</label>
                <div class="mt-2">
                    {{ $paciente->cedula }}
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                <div class="mt-2">
                    {{ $paciente->edad }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                <div class="mt-2">
                    {{ $paciente->telefono }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                <div class="mt-2">
                    {{ $paciente->direccion }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Fecha</label>
                <div class="mt-2">
                    {{ $paciente->fecha }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Motivo</label>
                <div class="mt-2">
                    {{ $paciente->motivo }}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Tipo</label>
                <div class="mt-2">
                    {{ $paciente->tipo }}
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
