<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imagenes/favicon.png') }}" />
</head>

<body>
    <header class="px-4 py-2 shadow">
        <div class="flex justify-end">
            <div class="flex items-center">
                <button data-dropdown class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" type="button" x-data="{ open: false }" @click="open = true"
                    :class="{ 'bg-gray-200 rounded-md': open }">
                    <img src="{{ asset('imagenes/admin.png') }}" alt="Profle" class="h-8 w-8 rounded-full">

                    <span class="ml-4 text-sm hidden md:inline-block">Perfil</span>
                    <svg class="fill-current w-3 ml-4" viewBox="0 0 407.437 407.437">
                        <path d="M386.258 91.567l-182.54 181.945L21.179 91.567 0 112.815 203.718 315.87l203.719-203.055z" />
                    </svg>

                    <div data-dropdown-items class="text-sm text-left absolute top-0 right-0 mt-16 mr-4 bg-white rounded border border-gray-400 shadow" x-show="open" @click.away="open = false">
                        <ul>
                            {{-- <li class="px-4 py-3 border-b hover:bg-gray-200"><a href="#">Mis datos</a></li>
                            <li class="px-4 py-3 border-b hover:bg-gray-200"><a href="#">Configuración</a></li> --}}
                            <li class="px-4 py-3 hover:bg-gray-200"><a href="{{ route('logout') }}">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </button>
            </div>
        </div>
    </header>

    <div class="flex flex-row">
        <div class="flex flex-col w-64 min-h-screen overflow-y-auto bg-gray-900 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <div class="sidebar text-center bg-gray-900">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">Administración</h1>
                    </div>
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                <a href="{{ route('admin/home') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Inicio</span>
                    </div>
                </a>
                <a href="{{ route('admin/pacientes') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Paciente</span>
                    </div>
                </a>
                <a href="{{ route('admin/profile') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-person-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Perfil</span>
                    </div>
                </a>
                <a href="{{ route('logout') }}">
                    <div class="my-4 bg-gray-600 h-[1px]"></div>
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Cerrar la sesión</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full min-h-screen px-4 py-8 mt-10">
            <div>@yield('contents')</div>
        </div>
    </div>
</body>

</html>
