@extends('layouts.app')

@section('title', 'Editar paciente')

@section('contents')
    <h1 class="mb-0">Editar paciente</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1">
            <form action="{{ route('admin/pacientes/update', $paciente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre" value="{{ $paciente->nombre }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                    <div class="mt-2">
                        <input id="apellido" name="apellido" type="text" value="{{ $paciente->apellido }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Cédula</label>
                    <div class="mt-2">
                        <input id="cedula" name="cedula" value="{{ $paciente->cedula }}" type="number"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
                    <div class="mt-2">
                        <input id="edad" name="edad" value="{{ $paciente->edad }}" type="number"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Télefono</label>
                    <div class="mt-2">
                        <input id="telefono" name="telefono" value="{{ $paciente->telefono }}" type="number"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                    <div class="mt-2">
                        <textarea name="direccion" placeholder="Dirección" rows="4"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    {{ $paciente->direccion }}
                    </textarea>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Fecha</label>
                    <div class="mt-2">
                        <input id="fecha" name="fecha" type="datetime-local"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                        {{ $paciente->fecha }}
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">motivo</label>
                    <div class="mt-2">
                        <textarea name="motivo" placeholder="motivo" rows="4"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    {{ $paciente->motivo }}
                    </textarea>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Tipo</label>
                    <div class="mt-2">
                        <input id="tipo" name="tipo" type="text" value="{{ $paciente->tipo }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required>
                    </div>
                </div>

                <button type="submit"
                    class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
