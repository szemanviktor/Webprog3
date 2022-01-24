@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-purple-600">
            <h1 class="text-6xl">
                Blog
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="text-center w-2/6 mb-4 text-gray-50 bg-green-400 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>        
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="text-center bg-blue-600 text-blue-100 py-4 px-8 font-bold text-s uppercase rounded-3xl">
                Létrehoz
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-purple-600">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" width="700" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500">
                    Készítette <span class="text-bold italic text-gray-800">{{ $post->user->name }}
                    </span>
                    , ekkor {{ date('jS M Y', strtotime($post->created_at)) }} .
                </span>
                
                <p class="text-xl text-gray-700 pt8 pb-10 leading-8 font-light"><br>
                    {{
                        $post->description
                    }}
                </p>
            
                <a href="/blog/{{$post->slug}}" class="text-center bg-blue-600 text-blue-100 py-4 px-6 font-semibold text-xs uppercase rounded-2xl">Olvasd tovább</a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a href="/blog/{{ $post->slug }}/edit" 
                           class="text-center text-blue-400 italic hover:text-blue-600 pb-1 border-b-2">
                            Szerkeszt
                        </a>
                    </span>
                    <br>
                    <span class="float-right py-4">
                        <form action="/blog/{{ $post->slug }}"
                            method="POST">
                            @csrf
                            @method('delete')

                            <button class="text-blue-400 italic hover:text-red-500 pb-1 border-b-2" 
                                    type="submit">
                                Törlés
                            </button>
                        </form>
                    </span>

                @endif
            </div>
        </div>
    @endforeach

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-purple-600">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/08/10/08/47/laptop-2620118_960_720.jpg" width="700" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                Minta 
            </h2>

            <span class="text-gray-500">
                Készítette <span class="text-bold italic text-gray-800">Felhasznaló név
                </span>
                , ekkor " dátum " . 
            </span>
            
            <p class="text-xl text-gray-700 pt8 pb-10 leading-8 font-light"><br>
                Ez egy minta leírás. Hasonlóképpen jelnik majd meg a valódi post is egyéb más funkciókkal ellátva.
            </p>
        </div>
    </div>
@endsection