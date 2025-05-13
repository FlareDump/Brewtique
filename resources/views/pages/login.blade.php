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
                        <img src="{{ asset('icons/brewtique-user-icon.png') }}" alt="brewtique-icon">
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
                                class="bg-colorExtra mt-2.5 rounded-md px-3.5 py-2.5 text-sm">
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
                            <input name="loginPassword" type="password" placeholder="********"
                                class="bg-colorExtra mt-2.5 rounded-md px-3.5 py-2.5 text-sm">
                            <!-- End Password Field -->

                            <!-- Remember Me and Forgot Password Section -->
                            <div class="text-txtExtra flex flex-row justify-between px-5 py-2.5">
                                <div class="flex flex-row items-center gap-2">
                                    <!-- Remember Me Checkbox -->
                                    <input type="checkbox"
                                        class="h-5 w-5 appearance-none rounded border-0 bg-gray-200 checked:bg-blue-500">
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
