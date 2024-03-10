@extends('layouts.app')

@section('title', 'Lista de pacientes')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Lista de pacientes</h1>
        <a href="{{ route('admin/pacientes/create') }}"
            class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar
            paciente</a>
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-10">#</th>
                    <th scope="col" class="px-1 py-10">Nombre</th>
                    <th scope="col" class="px-1 py-10">Apellido</th>
                    <th scope="col" class="px-1 py-10">Cédula</th>
                    <th scope="col" class="px-1 py-10">Edad</th>
                    <th scope="col" class="px-1 py-10">Telefono</th>
                    <th scope="col" class="px-1 py-10">Dirección</th>
                    <th scope="col" class="px-1 py-10">Fecha</th>
                    <th scope="col" class="px-1 py-10">Motivo</th>
                    <th scope="col" class="px-1 py-10">Tipo</th>
                    <th scope="col" class="px-1 py-10">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if ($paciente->count() > 0)
                    @foreach ($paciente as $rs)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->nombre }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->apellido }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->cedula }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->edad }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->telefono }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->direccion }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->fecha }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->motivo }}
                            </td>
                            <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $rs->tipo }}
                            </td>

                            <td class="w-36">
                                <div class="h-14 pt-5 flex justify-between">
                                    <a href="{{ route('admin/pacientes/show', $rs->id) }}" class="text-blue-800">Detalle</a>
                                    <a href="{{ route('admin/pacientes/edit', $rs->id) }}" class="text-green-800">Editar</a>
                                    <form action="{{ route('admin/pacientes/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class=" text-red-800">
                                        @csrf
                                        @method('DELETE')
                                        <button>Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Paciente no encontrado</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
