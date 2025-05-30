@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Brewtique')

@include('layouts.hero_section')
@include('layouts.aboutus_section')
@include('layouts.best_sellers_section')
@include('layouts.promo_section')

<div id="promoModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/50">
    @include('components.promo')
</div>

@include('layouts.testimonial_section')
@include('layouts.footer_section')
