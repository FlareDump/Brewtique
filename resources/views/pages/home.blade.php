@extends('layouts.layout')

@section('title', 'Brewtique - Promotions')

<link rel="icon" href="{{ asset('icons/brewtique-icon.png') }}">

@section('content')
    @auth
        @include('components.logged-navbar')
    @else
        @include('components.navbar')
    @endauth
    
    {{--cta--}}
    <div class="h-screen bg-cover bg-center"
         style="
            background-image: url('{{ asset('images/coffeebg.png') }}');
            background-color: var(--color-bgPrimary);
            background-blend-mode: multiply;
            background-position: center;
            height: 100vh; 
            width: 100%;
            position: absolute;
         ">
        {{--darken bg--}}
        <div class="absolute inset-0 bg-[#4c280a]/50"></div>

        {{--responsive--}}
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4 sm:px-6 lg:px-8 mx-auto w-full max-w-7xl text-center">

            {{--discount--}}
            <div class="absolute top-4 right-4 sm:top-8 sm:right-8 md:top-12 md:right-12 lg:top-16 lg:right-16 w-24 sm:w-32 md:w-40 lg:w-48 h-24 sm:h-32 md:h-40 lg:h-48 z-20">
                <div class="relative w-full h-full">
                    <img src="{{ asset('images/discount.png') }}" alt="30% Discount" class="w-full h-full object-contain">
                    <div class="absolute inset-0 flex items-center justify-center"></div>
                </div>
            </div>

            {{--promo headline--}}
            <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl mb-2"
                style="font-family: var(--font-Primary); color: var(--color-txtPrimary);">
                Today's Special
            </h2>
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold mb-4 sm:mb-6 leading-tight"
                style="font-family: var(--font-TitleFont); color: var(--color-txtPrimary);">
                Coffee Time with Brewtique
            </h1>

            {{--promo second line--}}
            <p class="max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl mx-auto text-xs sm:text-sm md:text-base lg:text-lg italic mb-6 sm:mb-8"
               style="font-family: var(--font-Primary); color: var(--color-txtPrimary);">
                Your Perfect Cup Starts Here – Find the Coffee You'll Love<br class="hidden sm:block">
                Bright, smooth, and perfect over ice. Only available this season.
            </p>

            {{--promo btn--}}
            <a href="{{ route('Promo') }}"
               class="inline-block font-bold py-2 sm:py-2.5 md:py-3 px-4 sm:px-5 md:px-6 rounded-lg shadow-md transition duration-300 text-xs sm:text-sm md:text-base"
               style="background-color: var(--color-btnColor2); color: var(--color-txtPrimary); font-family: var(--font-Primary);">
                View Promo </a>
        </div>
    </div>

@endsection

