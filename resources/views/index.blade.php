@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-indigo-200 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Szeretnél Webprogramozó lenni?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-indigo-50 text-indigo-700 py-2 px-4 font-bold text-xl uppercase">
                    Tudj meg többet
                </a>
            </div>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-purple-600">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/08/10/08/47/laptop-2620118_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-blue-800">
                Szeretnél többet megtudni a webprogramozásról?
            </h2>
            
            <p class="py-8 text-blue-400 text-s">
                Lorem ipsum dolor sit amet. Vel velit temporibus ex repellendus debitis eos velit exercitationem.
            </p>

            <p class="font-extrabold text-blue-500 text-s pb-9">
                Vel velit temporibus ex repellendus debitis eos velit exercitationem. Qui harum expedita et quod fugit et expedita quisquam sed voluptatibus quibusdam
            </p>

            <a 
                href="/blog"
                class="text-center bg-blue-600 text-blue-100 py-2 px-4 font-bold text-s uppercase rounded-3xl">
                Olvasd tovább
            </a>
        </div>
    </div>

@endsection