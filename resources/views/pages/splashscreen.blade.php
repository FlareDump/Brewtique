@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">
@section('title', 'Breqwtique')
<!-- Account Prompt Section -->
<div class="bg-bgPrimary flex min-h-screen flex-col items-center justify-center">
    <div
        class="bg-txtPrimary flex w-[450px] flex-col items-center gap-6 rounded-2xl px-16 py-16 shadow-2xl md:w-[600px] lg:w-[600px]">
        <h2 class="font-Primary text-txtSecondary mb-2 text-3xl font-bold">Welcome to Brewtique!</h2>
        <img src="{{ asset('images/Coffee 3.png') }}" alt="Coffee Cup" class="mb-2 h-64 w-64 object-contain">
        <p class="font-Primary text-txtExtra mb-6 text-lg">Do you already have an account?</p>
        <div class="flex flex-col gap-8 md:flex-row lg:flex-row">
            <a href="/Login"
                class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary rounded-lg px-10 py-3 text-xl shadow transition-colors duration-200">Yes,
                Login</a>
            <a href="/SignIn"
                class="bg-bgSecondary hover:bg-txtHighlighted text-txtPrimary font-Primary rounded-lg px-10 py-3 text-xl shadow transition-colors duration-200">No,
                Sign Up</a>
        </div>
    </div>
    <a href="/Home"
        class="text-txtSecondary hover:text-txtHighlighted absolute left-8 top-8 flex items-center gap-2 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="h-7 w-7">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="font-Primary hidden text-lg font-medium md:inline">Back Home</span>
    </a>
</div>
