@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">
@section('title', 'Brewtique Sign in')

<!-- Sign-In Page -->
<div class="bg-bgPrimary flex min-h-screen items-center justify-center">
    <div class="bg-txtPrimary inline-block rounded-lg shadow-2xl">
        <div class="bg-txtPrimary flex flex-row rounded-lg">
            <!-- Left Section: Sign-In Form -->
            <div class="bg-txtPrimary w-full rounded-lg px-10 py-10 md:w-1/2">
                <!-- Logo and Title -->
                <div class="flex items-center justify-center gap-3.5">
                    <a href="/Home">
                        <img src="{{ asset('icons/brewtique-user-icon.png') }}" alt="brewtique-icon">
                    </a>
                    <h1 class="font-TitleFont text-xl font-black">Brewtique</h1>
                </div>
                <div>
                    <h2 class="font-Primary text-txtExtra mb-1.5 text-4xl font-black">
                        “Every Sip Starts Here – Sign in now!
                    </h2>
                </div>

                <!-- Sign-In Form -->
                <form action="/SignIn" method="POST" class="flex flex-col">
                    @csrf
                    <!-- Username Field -->
                    <label class="font-Primary px-5 text-sm">Username</label>
                    @error('username')
                        <!-- Display validation error for username -->
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <input name="username" type="text" placeholder="Username"
                        class="bg-colorExtra mt-2.5 rounded-md px-3.5 py-2.5 text-sm">

                    <!-- Full Name Field -->
                    <label class="font-Primary mt-2.5 px-5 text-sm">Full Name</label>
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <input name="name" type="text" placeholder="Full Name"
                        class="bg-colorExtra mt-2.5 rounded-md px-3.5 py-2.5 text-sm">

                    <!-- Email Field -->
                    <label class="font-Primary mt-2.5 px-5 text-sm">Email Address</label>
                    @error('email')
                        <!-- Display validation error for email -->
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <input name="email" type="text" placeholder="your_email@gmail.com"
                        class="bg-colorExtra mt-2.5 rounded-md px-3.5 py-2.5 text-sm">

                    <!-- Password Field -->
                    <label class="font-Primary mt-2.5 px-5 text-sm">Password</label>
                    @error('password')
                        <!-- Display validation error for password -->
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="relative w-full">
                        <input name="password" type="password" placeholder="********"
                            class="toggle-password bg-colorExtra mt-2.5 w-full rounded-md px-3.5 py-2.5 pr-10 text-sm"
                            autocomplete="new-password" id="signinPasswordInput">
                        <button type="button" id="toggleSigninPasswordBtn"
                            class="absolute inset-y-0 right-3 flex translate-y-1.5 items-center text-gray-400 focus:outline-none"
                            tabindex="-1">
                            <i id="signinEyeIcon" class="fa fa-eye fa-lg"></i>
                        </button>
                    </div>

                    <!-- Remember Me and Forgot Password Section -->
                    <div class="text-txtExtra flex flex-row justify-between px-5 py-2.5">
                        <div class="flex flex-row items-center gap-2">
                            <!-- Remember Me Checkbox -->
                            <input type="checkbox" name="remember"
                                class="border-txtHighlighted focus:ring-txtHighlighted h-5 w-5 rounded border-2 bg-gray-200 text-blue-500 transition-all duration-200 focus:ring-2">
                            <span class="font-Primary text-txtExtra text-xs">Remember me</span>
                        </div>
                        <div class="flex">
                            <!-- Forgot Password Link -->
                            <span class="font-Primary text-txtExtra text-xs">Forgot password?</span>
                        </div>
                    </div>

                    <!-- Sign-In Button and Alternative Login Options -->
                    <div class="flex flex-col items-center justify-center gap-2.5">
                        <!-- Sign-In Button -->
                        <button class="bg-btnColor font-Primary text-txtPrimary px-15 rounded-sm py-1 text-lg">Sign
                            In</button>

                        <!-- Divider for Alternative Login Options -->
                        <div class="flex w-full max-w-56 items-center justify-center">
                            <div class="flex-grow border-t border-gray-400"></div>
                            <span class="mx-4 text-sm text-gray-500">or</span>
                            <div class="flex-grow border-t border-gray-400"></div>
                        </div>

                        <!-- Google Login Button -->
                        <button
                            class="border-txtTertiary flex flex-row items-center justify-center gap-2.5 rounded-sm border px-2.5 py-1 text-xs">
                            <img src="{{ asset('icons/google-icon.svg') }}" alt="Google">
                            Continue with Google
                        </button>

                        <!-- Login Link -->
                        <span class="text-sm text-gray-500">Already have an account? <a href="/Login"
                                class="underline">Login</a></span>
                    </div>
                </form>
            </div>

            <!-- Right Section: Image (hidden on small screens) -->
            <div
                class="bg-icon rounded-tb-lg hidden w-1/2 items-center justify-center rounded-r-lg rounded-bl-[250px] md:flex">
                <img src="{{ asset('images/Coffee 1.png') }}" alt="" class="lg:size-128 md:size-86">
            </div>
        </div>
    </div>
</div>
<!-- End of Sign-In Page -->

@vite(['resources/js/app.js'])
