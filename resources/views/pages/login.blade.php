@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@section('title', 'Brewtique Login')

<div class="bg-bgPrimary flex min-h-screen items-center justify-center">
    <div class="bg-icon inline-block rounded-lg shadow-2xl">
        <div class="bg-icon flex flex-row rounded-lg">
            <!-- Left Section -->
            <div class="flex w-[40%] items-center justify-center">
                <img src="{{ asset('images/Coffee 2.svg') }}" alt="kape" class="md:size-86 lg:size-128">
            </div>

            <!-- Right Section -->
            <div class="bg-txtPrimary flex w-[60%] items-center justify-center rounded-l-[200px] px-10 py-10 pl-20">
                <div>
                    <!-- Logo, Title, and Greeting -->
                    <div class="flex items-center justify-center gap-3.5">
                        <a href="/Home">
                            <img src="{{ asset('icons/brewtique-user-icon.png') }}" alt="brewtique-icon">
                        </a>
                        <h1 class="font-TitleFont text-xl font-black">Brewtique</h1>
                    </div>
                    <div>
                        <h2 class="font-Primary text-txtExtra text-4xl font-black">
                            “Good to See You Again!
                        </h2>
                        <p></p>
                        The coffee’s fresh, and your seat is saved. Time to pick up where you left off!"
                        </p>
                    </div>
                    <!-- Form Section -->
                    <div>
                        <!-- Login Form -->
                        <form action="/Login" method="POST" class="flex flex-col">
                            @csrf

                            <!-- Username Field -->
                            <label class="font-Primary mt-2.5 px-5 text-sm font-medium">Username</label>
                            @error('loginName')
                                <!-- Display validation error for username -->
                                <span class="mt-2.5 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            @if ($errors->has('loginError'))
                                <!-- Display general login error -->
                                <span class="mt-2.5 text-sm text-red-500">{{ $errors->first('loginError') }}</span>
                            @endif
                            <input name="loginName" type="text" placeholder="Username"
                                class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText mt-2.5 rounded-md border-2 px-3.5 py-2.5 text-sm shadow-sm transition-all duration-200 focus:outline-none focus:ring-2"
                                autocomplete="username">
                            <!-- End Username Field -->

                            <!-- Password Field -->
                            <label class="font-Primary mt-2.5 px-5 text-sm font-medium">Password</label>
                            @error('loginPassword')
                                <!-- Display validation error for password -->
                                <span class="mt-2.5 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                            @if ($errors->has('loginError'))
                                <!-- Display general login error -->
                                <span class="mt-2.5 text-sm text-red-500">{{ $errors->first('loginError') }}</span>
                            @endif
                            <div class="relative w-full">
                                <input name="loginPassword" type="password" placeholder="********"
                                    class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText mt-2.5 w-full rounded-md border-2 px-3.5 py-2.5 pr-10 text-sm shadow-sm transition-all duration-200 focus:outline-none focus:ring-2"
                                    autocomplete="current-password" id="loginPasswordInput">
                                <button type="button" id="togglePasswordBtn"
                                    class="absolute inset-y-0 right-3 flex translate-y-1.5 items-center text-gray-400 focus:outline-none"
                                    tabindex="-1">
                                    <i id="eyeIcon" class="fa fa-eye fa-lg"></i>
                                </button>
                                </input>
                            </div>
                            <!-- End Password Field -->

                            <!-- Remember Me and Forgot Password Section -->
                            <div class="text-txtExtra flex flex-row justify-between px-5 py-2.5">
                                <!-- Remember Me Checkbox -->
                                <div class="flex flex-row items-center gap-2">
                                    <input type="checkbox" name="remember"
                                        class="border-txtHighlighted focus:ring-txtHighlighted h-5 w-5 rounded border-2 bg-gray-200 text-blue-500 transition-all duration-200 focus:ring-2">
                                    <span class="font-Primary text-txtExtra text-xs">Remember me</span>
                                </div>
                                <div class="flex">
                                    <!-- Forgot Password Link -->
                                    <span class="font-Primary text-txtExtra text-xs">Forgot password?</span>
                                </div>
                            </div>
                            <!-- End Remember Me and Forgot Password Section -->

                            <!-- Login Button and Alternative Login Options -->
                            <div class="flex flex-col items-center justify-center gap-2.5">
                                <!-- Login Button -->
                                <button
                                    class="bg-btnColor font-Primary text-txtPrimary px-17 rounded-sm py-1 text-lg">Login</button>

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

                                <!-- Sign In Link -->
                                <span class="text-sm text-gray-500">Already have an account? <a href="/SignIn"
                                        class="underline">Sign In</a></span>
                            </div>
                            <!-- End Login Button and Alternative Login Options -->
                        </form>
                        <!-- End Login Form -->
                    </div>
                    <!--End of Form Section -->
                </div>
            </div>
        </div>
    </div>
</div>

@vite('resources/js/app.js')
