@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Brewtique - Hot Drinks')

@extends('layouts.products_hotdrinks')
