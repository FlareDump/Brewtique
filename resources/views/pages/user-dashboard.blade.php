@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@extends('components.logged-navbar')

@section('title', 'Brewtique Profiles')

@section('content')
    <p>Congrats Tao naka.</p>
    <form action="/logout" method="POST">
        @csrf
        <button
            class="w-50 justify-center rounded-lg border bg-blue-500 py-1 text-2xl font-medium text-white transition duration-300 ease-in-out hover:bg-blue-600">Log
            out
        </button>
    </form>
@endsection
