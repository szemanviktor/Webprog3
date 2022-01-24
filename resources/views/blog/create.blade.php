@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-purple-600">
            <h1 class="text-6xl">
                Bejegyzés Létrehozás
            </h1>
        </div>
    </div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="w-4/5 m-auto pt-20">
        <form 
            action="/blog"
            method="POST"
            enctype="multipart/form-data">
            @csrf
    
            <input 
                type="text"
                name="title"
                placeholder="Cím..."
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
    
            <textarea 
                name="description"
                placeholder="Leírás..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
    
            <div class="bg-grey-lighter pt-15">
                <label class="w-auto flex flex-col items-center px-3 pt-5 pb-4 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer rounded-3xl">
                    <span class="mt-2 text-base leading-normal font-bold text-blue-600">
                        Válasszon egy képet
                    </span>
                    <input 
                        type="file"
                        name="image"
                        class="hidden">
                </label>
            </div>
    
            <button    
                type="submit"
                class="uppercase center mt-15 bg-blue-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl shadow-lg">
                Bejegyzés létrehozása
            </button>
        </form>
    </div>

@endsection