@extends('layouts.user')

@section('title', 'Home')

@section('contents')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Consultorio de enfermería de la UJGH
            </h1>
        </div>
    </header>
    <hr />
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c2.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c4.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c5.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c6.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c7.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c8.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c9.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c10.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c11.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c12.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="8000">
                                <img src="{{ asset('imagenes/carrusel/c13.png') }}" class="d-block w-100" alt="...">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
